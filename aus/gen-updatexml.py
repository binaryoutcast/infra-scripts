#!/usr/bin/env python

# This Source Code Form is subject to the terms of the Mozilla Public
# License, v. 2.0. If a copy of the MPL was not distributed with this
# file, You can obtain one at http://mozilla.org/MPL/2.0/.

# ===| Imports |===============================================================

from __future__ import print_function
import hashlib
import os
import sys
import json

# =============================================================================

# ===| Initial Setup |=========================================================

# Define initial vars
pathCurrent = os.getcwd()
pathXMLFile = pathCurrent + '\\update.xml'

listRaw = os.listdir(pathCurrent)
listFiles = []
listJsonFiles = []
listMarFiles = []

# Create XML File
try:
    fileXML = open(pathXMLFile, 'wb')
except:
    print('For some reason we could not create {0}'.format(pathXMLFile))
    sys.exit(1)

# =============================================================================

# ===| function: Generate Checksum |===========================================

def funcChecksum(filename, block_size=65536):
    sha256 = hashlib.sha256()
    with open(filename, 'rb') as f:
        for block in iter(lambda: f.read(block_size), b''):
            sha256.update(block)
    return sha256.hexdigest()

# =============================================================================

# ===| function: Read JSON File |==============================================

def funcReadJson(filename):
    with open(filename) as json_data:
        _jsonData = json.load(json_data)
    return(_jsonData)

# =============================================================================

# ===| Main |=================================================================
 
# Get a list of all files
for _item in listRaw:
    if not os.path.isdir(pathCurrent + '\\' + _item):
        listFiles += [ _item ]
 
# Pull out all mar and json files from raw list 
for _item in listFiles:
    if _item.endswith('.mar'):
        listMarFiles += [ _item ]
    elif _item.endswith('.json'):
        listJsonFiles += [ _item ]

# Read the first json file found
dictJsonData = funcReadJson(listJsonFiles[0])

# Get the file size in bytes for the first mar file found
strMarSize = os.path.getsize(listMarFiles[0])

# Generate a SHA256 hash for the first mar file found
strMarHash = funcChecksum(listMarFiles[0])

# Pull out the Build ID and Version from the JSON Data
strBuildID = dictJsonData['buildid']
strVersion = dictJsonData['moz_app_version']

# Fill the XML file with values from above
strXML = '''<?xml version="1.0"?>

<updates>
  <update type="minor" displayVersion="{0}" appVersion="{0}" extensionVersion="{0}"
          buildID="{1}"
          detailsURL="http://www.palemoon.org/unstable/">
  <patch type="complete"
         URL="http://aus.palemoon.org/mar/palemoon-unstable-latest.win32.complete.mar"
         hashFunction="SHA256"
         hashValue="{2}"         
         size="{3}"/>
  </update>
</updates>'''.format(strVersion, strBuildID, strMarHash, strMarSize)

# Write and close the XML file
fileXML.write(strXML)
fileXML.close

# =============================================================================