app_name=breezedark
appstore_dir=$(CURDIR)/appstore

appstore:
	rm -rf $(appstore_dir)
	mkdir -p $(appstore_dir)
	tar cvzf $(appstore_dir)/$(app_name).tar.gz \
	--exclude-vcs \
	--exclude="../$(app_name)/.github" \
	--exclude="../$(app_name)/.vscode" \
	--exclude="../$(app_name)/appstore" \
	--exclude="../$(app_name)/Makefile" \
	../$(app_name)

sign_release:
	openssl dgst -sha512 -sign $(HOME)/.nextcloud/certificates/breezedark.key $(appstore_dir)/$(app_name).tar.gz | openssl base64
