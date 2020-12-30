#!/bin/bash
# This Source Code Form is subject to the terms of the Mozilla Public
# License, v. 2.0. If a copy of the MPL was not distributed with this
# file, You can obtain one at http://mozilla.org/MPL/2.0/.

# ===| Vars |==================================================================

strBasePath="/srv/www/xref.palemoon.org/datastore/mxr"

arrayDirs=(
    "${strBasePath}/uxp-trunk/.glimpse_*"
    "${strBasePath}/uxp-trunk/fileidx"
    "${strBasePath}/uxp-trunk/xref"
)

# =============================================================================

# ===| Main |==================================================================

for _value in "${arrayDirs[@]}"
    do
        vmtouch -t $_value
    done

# =============================================================================
