#!/usr/bin/env bash
# Build the marketplace package. Archive root: the coremio/ folder, ready to
# unpack over a WISECP installation, plus the README files and LICENSE. Only
# tracked files are packed, so OS files (__MACOSX, .DS_Store) and the live
# config.php can never end up in it.
#
# Usage: tools/build-release-zip.sh [ref] [output.zip]
set -euo pipefail

cd "$(dirname "$0")/.."
REF="${1:-HEAD}"
MODULE="coremio/modules/Registrars/DomainNameAPI"
VERSION="$(git show "$REF:$MODULE/DomainNameAPI.php" | sed -n "s/.*const VERSION = '\([^']*\)'.*/\1/p" | head -1)"
OUT="${2:-dist/DomainNameAPI-WiseCP5-v${VERSION}.zip}"

WORK="$(mktemp -d)"
trap 'rm -rf "$WORK"' EXIT

git archive "$REF" coremio | tar -x -C "$WORK"
for f in $(git ls-tree --name-only "$REF" | grep -E '^(README.*\.md|LICENSE)$'); do
    git show "$REF:$f" > "$WORK/$f"
done
rm -f "$WORK/$MODULE/config.php"

mkdir -p "$(dirname "$OUT")"
OUT_ABS="$(cd "$(dirname "$OUT")" && pwd)/$(basename "$OUT")"
rm -f "$OUT_ABS"
(cd "$WORK" && zip -q -r -X "$OUT_ABS" coremio README*.md LICENSE)

echo "$OUT_ABS"
