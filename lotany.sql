Create table users(
    id int (11) not null auto_increment primary key,
    username varchar(20) not null,
    email varchar(30) not null,
    password varchar(100) not null
);

Create table testimonies(
    id int(11) not null auto_increment primary key,
    name varchar(30) not null,
    content varchar(300) not null,
    image varchar(300)
);

Create table banner(
    id int(10) not null auto_increment primary key,
    header varchar(200) not null,
    content varchar (300) not null,
    dateposted timestamp
);


Create table messages(
    id int(11) not null auto_increment primary key,
    name varchar(40) not null,
    email varchar(100) not null,
    message varchar(400) not null
);
