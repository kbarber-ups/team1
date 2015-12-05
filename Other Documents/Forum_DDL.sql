.mode columns
.headers on
.nullvalue NULL
PRAGMA foreign_keys = ON;


CREATE TABLE `User`(
  `userName` TEXT UNIQUE NOT NULL,
  `password` TEXT NOT NULL,
  `avatar` BLOB,
  `permissions` INTEGER NOT NULL,
    PRIMARY KEY (userName)
);


CREATE TABLE `Forum` (
  `name` TEXT CHECK(LENGTH(name) < 30),
  `forumID` INTEGER UNIQUE NOT NULL,
		PRIMARY KEY (forumID)
);

CREATE TABLE `Threads` (
  `threadID` INTEGER UNIQUE NOT NULL,
  `timeCreated` TEXT NOT NULL,
  `title` TEXT NOT NULL,
  `gameMaster` TEXT NOT NULL,
  `forumID` INTEGER NOT NULL,
		PRIMARY KEY (threadID),
    FOREIGN KEY (forumID) REFERENCES Forum(forumID)
      ON UPDATE CASCADE
      ON DELETE CASCADE,
    FOREIGN KEY (gameMaster) REFERENCES User(userName)
      ON UPDATE CASCADE
      ON DELETE NO ACTION
);


CREATE TABLE `Posts` (
  `postID` INTEGER UNIQUE NOT NULL,
  `timePosted` TEXT NOT NULL,
  `content` TEXT NOT NULL,
  `threadID` INTEGER NOT NULL,
  `creator` TEXT NOT NULL,
		PRIMARY KEY (postID),
    FOREIGN KEY (threadID) REFERENCES Threads(threadID)
      ON UPDATE CASCADE
      ON DELETE CASCADE,
    FOREIGN KEY (creator) REFERENCES User(Username)
      ON UPDATE CASCADE
      ON DELETE NO ACTION
);


CREATE TABLE `Characters`(
  `characterID` INTEGER UNIQUE NOT NULL,
  `characterAvatar` BLOB,
  `characterBio` TEXT,
  `username` TEXT NOT NULL,
  `characterName` TEXT NOT NULL,
    PRIMARY KEY (characterID),
    FOREIGN KEY (userName) REFERENCES User(userName)
      ON UPDATE CASCADE
      ON DELETE NO ACTION
);


CREATE TABLE `CharacterTemplate`(
  `templateID` INTEGER UNIQUE NOT NULL,
  `templateName` TEXT NOT NULL,
  `data` BLOB,
  `userName` TEXT NOT NULL,
    PRIMARY KEY (templateID)
    FOREIGN KEY (userName) REFERENCES User(userName)
      ON UPDATE CASCADE
      ON DELETE NO ACTION
);
