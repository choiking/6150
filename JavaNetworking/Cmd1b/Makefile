CAT     = /bin/cat
ECHO    = /bin/echo
JAR     = /usr/bin/jar
JAVA    = /usr/bin/java
JAVAC   = /usr/bin/javac
RM      = /bin/rm -f

SOURCES = Cmd.java
CLASSES	= Cmd1.class

PROG = Cmd1

.phoney: run clean clobber

all: $(PROG)

$(PROG):
	$(JAVAC) $@.java
	$(ECHO) "Manifest-Version: 1.0" > $(PROG).mf
	$(ECHO) "Main-Class: " $(PROG) >> $(PROG).mf
	$(JAR) cfm $@.jar $@.mf $(CLASSES)
	$(CAT) $@.mf

run:
	$(JAVA) $(PROG)

jar:	
	$(JAVA) -jar $(PROG).jar

clobber:
	$(RM) $(CLASSES)


