#!/usr/bin/env bash
APP_NAME=breezedark
RELEASE_DIR=$(pwd)/release

rm -rf $RELEASE_DIR
mkdir -p $RELEASE_DIR
tar cvzf $RELEASE_DIR/$APP_NAME.tar.gz \
--exclude-vcs \
--exclude="../$APP_NAME/.github" \
--exclude="../$APP_NAME/.vscode" \
--exclude="../$APP_NAME/node_modules" \
--exclude="../$APP_NAME/release" \
--exclude="../$APP_NAME/.gitignore" \
--exclude="../$APP_NAME/.prettierignore" \
--exclude="../$APP_NAME/.prettierrc" \
--exclude="../$APP_NAME/.stylelintignore" \
--exclude="../$APP_NAME/.stylelintrc.json" \
--exclude="../$APP_NAME/create_release.sh" \
--exclude="../$APP_NAME/package-lock.json" \
--exclude="../$APP_NAME/package.json" \
--exclude="../$APP_NAME/screenshot.png" \
--exclude="../$APP_NAME/translationtool.phar" \
../$APP_NAME

openssl dgst -sha512 -sign $HOME/.nextcloud/certificates/breezedark.key $RELEASE_DIR/$APP_NAME.tar.gz | openssl base64
