create database cars_reservation;
use cars_reservation;
drop table if exists CARS;
drop table if exists CAR_IMAGE;
drop table if exists MODEL;
drop table if exists CATEGORY;
drop table if exists PAYMENT;
drop table if exists RESERVATION;
drop table if exists USER;
drop table if exists BRAND;
create table CARS
(
   ID_CAR               int not null auto_increment,
   COLOR                varchar(50) not  null,
   KILOMETER            int not null,
   ENERGY               varchar(50) not null,
   CAPACITY             int not null,
   PRICE                float(8,2) not null,
   YEAR_MODEL           int not null,
   ID_CATEGORY          int,
   primary key (ID_CAR)
);

create table CAR_IMAGE
(
   ID_IMG               int not null auto_increment,
   ID_CAR               int,
   IMG_DESCRIPTION      varchar(50),
   IMG_CAR              varchar(255) not null,
   primary key (ID_IMG)
);
create table CATEGORY
(
   ID_CATEGORY          int not null auto_increment,
   CATEGORY_CAR         varchar(50) not null,
   ID_BRAND             int not null,
   ID_MODEL             int not null,  
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
   ID_CAR               int,
   RENTAL_DATE_TIME     DATETIME not null,
   RETURN_DATE_TIME     DATETIME not null,
   primary key (ID_RESERVATION)
);
create table USER
(
   ID_USER              int not null auto_increment,
   ADRESS               varchar(100),
   CONTACT              numeric(10,0),
   USERNAME             varchar(50) not null,
   EMAIL                varchar(255),
   PASSWORD             varchar(255) not null,
   primary key (ID_USER)
);
create table BRAND 
(
   ID_BRAND             int not null AUTO_INCREMENT,
   BRAND_CAR            varchar(50) not null,
   primary key (ID_BRAND)
);
create table MODEL 
(
   ID_MODEL             int not null AUTO_INCREMENT,
   MODEL_CAR            VARCHAR(50) not null,
   MODEL_IMG            varchar(255) not null,
   primary key (ID_MODEL)
);

alter table CAR_IMAGE add constraint foreign key (ID_CAR)
      references CARS (ID_CAR) on delete restrict on update restrict;
alter table CARS add constraint foreign key (ID_CATEGORY)
      references CATEGORY (ID_CATEGORY) on delete restrict on update restrict;
alter table CATEGORY add constraint foreign key (ID_BRAND)
      references BRAND (ID_BRAND) on delete restrict on update restrict;
alter table CATEGORY add constraint foreign key (ID_MODEL)
      references MODEL (ID_MODEL) on delete restrict on update restrict;
alter table RESERVATION add constraint foreign key (ID_USER)
      references USER (ID_USER) on delete restrict on update restrict;
alter table RESERVATION add constraint foreign key (ID_PAYMENT)
      references PAYMENT (ID_PAYMENT) on delete restrict on update restrict;

alter table RESERVATION add constraint foreign key (ID_CAR)
      references CARS (ID_CAR) on delete restrict on update restrict;
