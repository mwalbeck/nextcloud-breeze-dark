# This file is licensed under the Affero General Public License version 3 or
# later. See the COPYING file.

app_name=breezedark
build_directory=$(CURDIR)/build
sign_directory=$(build_directory)/sign
cert_directory=$(HOME)/.nextcloud/certificates

all: dev-setup prettier stylelint

dev-setup: npm-init

npm-init:
	npm ci

prettier:
	npm run prettier

prettier-fix:
	npm run prettier:fix

stylelint:
	npm run stylelint

stylelint-fix:
	npm run stylelint:fix

appstore:
	rm -rf $(build_directory)
	mkdir -p $(sign_directory)
	rsync -a \
	--exclude=".git" \
	--exclude=".github" \
	--exclude=".vscode" \
	--exclude="node_modules" \
	--exclude="build" \
	--exclude=".gitignore" \
	--exclude=".prettierignore" \
	--exclude=".prettierrc" \
	--exclude=".stylelintignore" \
	--exclude=".stylelintrc.json" \
	--exclude="Makefile" \
	--exclude="package-lock.json" \
	--exclude="package.json" \
	--exclude="screenshot.png" \
	--exclude="translationtool.phar" \
	../$(app_name)/ $(sign_directory)/$(app_name)
	@if [ -f $(cert_directory)/$(app_name).key ]; then \
		echo "Signing app files…"; \
		php ../occ integrity:sign-app \
			--privateKey=$(cert_directory)/$(app_name).key\
			--certificate=$(cert_directory)/$(app_name).crt\
			--path=$(sign_directory)/$(app_name); \
	fi
	tar czf $(build_directory)/$(app_name).tar.gz \
		-C $(sign_directory) $(app_name)

sign-package:
	openssl dgst -sha512 -sign $(cert_directory)/$(app_name).key $(build_directory)/$(app_name).tar.gz | openssl base64;
