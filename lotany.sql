Create table users(
    id int (11) not null auto_increment primary key,
    username varchar(20) not null,
    email varchar(30) not null
);

Create table testimonies(
    id int(11) not null auto_increment primary key,
    name varchar(30) not null,
    content varchar(300) not null,
    image varchar(300)
);

