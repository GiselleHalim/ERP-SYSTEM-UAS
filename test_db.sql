SET	SQL_MODE	=	"NO_AUTO_VALUE_ON_ZERO";
SET	AUTOCOMMIT	=	0;
START	TRANSACTION;
SET	time_zone	=	"+00:00";

CREATE	TABLE	`users`	(
		`id`	int(11)	NOT	NULL,
		`user_name`	varchar(255)	NOT	NULL,
		`password`	varchar(255)	NOT	NULL,
		`name`	varchar(255)	NOT	NULL
)	ENGINE=InnoDB	DEFAULT	CHARSET=latin1;

INSERT	INTO	`users`	(`id`,	`user_name`,	`password`,	`name`)	VALUES
(1,	'giselle', 'test',	'Giselle'),
(2,	'miki',	'try',	'Miki0427');

ALTER	TABLE	`users`
ADD	PRIMARY	KEY	(`id`);

ALTER	TABLE	`users`
		MODIFY	`id`	int(11)	NOT	NULL	AUTO_INCREMENT,	AUTO_INCREMENT=3;
COMMIT;
