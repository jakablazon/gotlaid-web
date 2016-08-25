#!/bin/sh
if [[ "$(basename -- '${0}')" == "switchJava.sh" ]]; then
    echo "Don't run $0, source it: source switchJava.sh <java version:7|8>" >&2
else
	if [ -z "${1}" ]; then 
		echo "Java version not supplied";
	else
		echo "Switching java to ${1}. Searching Java Home..."
		JAVA_PATH=$(/usr/libexec/java_home -v 1.${1})
		if [ -z "${JAVA_PATH}" ]; then 
			echo "Java home path not found, this version might not be installed!";
		else
			echo "Path for Java ${1} home: ${JAVA_PATH}"
			export JAVA_HOME="${JAVA_PATH}"
		fi
	fi
fi
