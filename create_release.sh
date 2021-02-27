#!/usr/bin/env bash
APP_NAME=breezedark
RELEASE_DIR=$(pwd)/release

rm -rf $RELEASE_DIR
mkdir -p $RELEASE_DIR
tar cvzf $RELEASE_DIR/$APP_NAME.tar.gz \
--exclude-vcs \
--exclude="./.github" \
--exclude="./.vscode" \
--exclude="./node_modules" \
--exclude="./release" \
--exclude="./.gitignore" \
--exclude="./.prettierignore" \
--exclude="./.prettierrc" \
--exclude="./.stylelintignore" \
--exclude="./.stylelintrc.json" \
--exclude="./create_release.sh" \
--exclude="./package-lock.json" \
--exclude="./package.json" \
--exclude="./screenshot.png" \
--exclude="./translationtool.phar" \
./
