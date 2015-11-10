/*Populate tables with some dummy data*/

INSERT INTO User VALUES ('Charlie17', '12345', 'cat.jpg', 0);
INSERT INTO User VALUES ('Blue', 'password', 'monster.jpg', 1);
INSERT INTO User VALUES ('Shirley', 'iheartmips', 'hats.jpg', 0);
INSERT INTO User VALUES ('Coolguy214', 'plasma', 'cherry_pie.jpg', 2);
INSERT INTO User VALUES ('Danny95', 'unicorns', 'unicorns.jpg', 0);
INSERT INTO User VALUES ('Rando', 'alfalfa', 'llamas.jpg', -1);

INSERT INTO Forum VALUES ('Game Forum', 1);

INSERT INTO Threads VALUES (0, '2015-02-11 12:00.000', 'Arctic Adventure', 'Danny95', 1);
INSERT INTO Threads VALUES (17, '2015-02-12 02:00.000', 'Cave Diving', 'Danny95', 1);
INSERT INTO Threads VALUES (5, '2014-01-01 01:50.000', 'Colosus', 'Rando', 1);
INSERT INTO Threads VALUES (4, '2015-04-29 00:00.000', 'Space', 'Blue', 1);
INSERT INTO Threads VALUES (17, '2015-02-12 18:00.000', 'Desert Plains', 'Shirley', 1);

INSERT INTO Posts VALUES (1, '2015-04-02 02:00.000', 'I like cupcakes.', 4, 'Rando');
INSERT INTO Posts VALUES (2, '2015-05-07 05:07.000', 'Hurrrrrr', 12, 'Rando');
INSERT INTO Posts VALUES (3, '2015-06-08 20:20.000', 'Durrrrrr', 5, 'Rando');
INSERT INTO Posts VALUES (4, '2015-07-02 13:56.000', 'BACON', 0, 'Rando');

INSERT INTO CharacterTemplate VALUES (0, 'Blah', 'test.xml', 'Blue');
INSERT INTO CharacterTemplate VALUES (0, 'Blah', 'test.xml', 'Blue');
INSERT INTO CharacterTemplate VALUES (2, 'Blah2', 'test.xml', 'Blue');
INSERT INTO CharacterTemplate VALUES (3, 'Blah4', 'test.xml', 'Blue');
INSERT INTO CharacterTemplate VALUES (4, 'Blah5', 'test.xml', 'Blue');


INSERT INTO Characters VALUES (0, 'test.xml', 'test.xml', 'Danny95', 'Pikachu');
INSERT INTO Characters VALUES (1, 'test.xml', 'test.xml', 'Shirley', 'Eevee');
INSERT INTO Characters VALUES (2, 'test.xml', 'test.xml', 'Rando', 'Charmander');
INSERT INTO Characters VALUES (3, 'test.xml', 'test.xml', 'Danny95', 'Mudkip');