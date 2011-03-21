#!/usr/bin/python

# Camp Hackathon Hosting Utils
# Copyright (c) 2011 Facebook. All Rights Reserved.

import csv
import facebook

from optparse import OptionParser

PASSWD_FILE_PATH = "/etc/passwd"

class TaskInfo:
    def run():
        #

def parse_passwd_file():
    with open(PASSWD_FILE_PATH, "rb") as f:
        reader = csv.reader(f, delimiter=":", quoting=csv.QUOTE_NONE)
        for row in reader:
            print row

def main():
    print "* hack *"
    user = facebook.GraphAPI().get_object("jimbru")
    print "  jimbru: " + str(user) + "\n"

    usage = "usage: %prog [options] arg1 arg2"
    version = "%prog 0.1"
    parser = OptionParser(usage=usage, version=version)
    parser.add_option("-t", "--test");
    (options, args) = parser.parse_args()
    print "***"
    print options
    print args
    print "\n"

    print"***"
    parse_passwd_file()

if __name__ == "__main__":
    main()
