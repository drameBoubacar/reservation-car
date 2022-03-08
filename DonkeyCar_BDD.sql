
create database cars_reservation;

use cars_reservation;

drop table if exists CARS;

drop table if exists CAR_IMAGE;

drop table if exists CATEGORY;

drop table if exists PAYMENT;

drop table if exists RESERVATION;

drop table if exists USER;

create table CARS
(
   ID_CAR               int not null auto_increment,
   ID_CATEGORY          int,
   MODEL                varchar(100) not null,
   COLOR                longblob not null,
   KILOMETER            numeric(8,0) not null,
   ENERGY               varchar(50) not null,
   CAPACITY             numeric(10,0) not null,
   RATE                 numeric(5,0),
   CAR_STATUS           bool not null,
   PRICE                float(8,2) not null,
   YEAR_MODEL           numeric(8,0) not null,
   BRAND                varchar(50) not null,
   primary key (ID_CAR)
);

create table CAR_IMAGE
(
   ID_IMG               int not null auto_increment,
   ID_CAR               int,
   IMG_DESCRIPTION      varchar(100),
   primary key (ID_IMG)
);


create table CATEGORY
(
   ID_CATEGORY          int not null auto_increment,
   CATEGORY_CAR         varchar(50) not null,
   primary key (ID_CATEGORY)
);


create table PAYMENT
(
   ID_PAYMENT           int not null auto_increment,
   PAYMENT_AMOUNT       float(8,2) not null,
   PAYMENT_DATE         date not null,
   CHARGE               float(8,2),
   primary key (ID_PAYMENT)
);


create table RESERVATION
(
   ID_RESERVATION       int not null auto_increment,
   ID_USER              int,
   ID_PAYMENT           int,
   RENTAL_DATE          date not null,
   RENTAL_TIME          time not null,
   RETURN_DATE          date not null,
   RETURN_TIME          time not null,
   primary key (ID_RESERVATION)
);

create table USER
(
   ID_USER              int not null auto_increment,
   ADRESS               varchar(100) not null,
   ACCOUNT_STATUS       bool not null,
   CONTACT              numeric(10,0) not null,
   USERNAME             varchar(50),
   EMAIL                varchar(255) not null,
   PASSWORD             varchar(255),
   primary key (ID_USER)
);

alter table CAR_IMAGE add constraint FK_RELATION_1 foreign key (ID_CAR)
      references CARS (ID_CAR) on delete restrict on update restrict;

alter table CARS add constraint FK_RELATION_3 foreign key (ID_CATEGORY)
      references CATEGORY (ID_CATEGORY) on delete restrict on update restrict;

alter table RESERVATION add constraint FK_RELATION_2 foreign key (ID_USER)
      references USER (ID_USER) on delete restrict on update restrict;

alter table RESERVATION add constraint FK_RELATION_4 foreign key (ID_PAYMENT)
      references PAYMENT (ID_PAYMENT) on delete restrict on update restrict;

