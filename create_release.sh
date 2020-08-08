#!/usr/bin/env bash
APP_NAME=breezedark
RELEASE_DIR=$(pwd)/release

rm -rf $RELEASE_DIR
mkdir -p $RELEASE_DIR
tar cvzf $RELEASE_DIR/$APP_NAME.tar.gz \
--exclude-vcs \
--exclude="../$APP_NAME/.github" \
--exclude="../$APP_NAME/.vscode" \
--exclude="../$APP_NAME/appstore" \
--exclude="../$APP_NAME/Makefile" \
../$APP_NAME

openssl dgst -sha512 -sign $HOME/.nextcloud/certificates/breezedark.key $RELEASE_DIR/$APP_NAME.tar.gz | openssl base64
