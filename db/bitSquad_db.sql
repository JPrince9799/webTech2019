/*DROP SCHEMA IF EXISTS bittours_db;*/

-- CREATE SCHEMA bittours_db;

USE webtech_fall2019_joseph_agbodjan;

-- tables
-- Table: HOTELS
CREATE TABLE HOTELS (
    hotel_id int(10) NOT NULL AUTO_INCREMENT,
    name varchar(50) NOT NULL,
    address varchar(50) NOT NULL,
    countryName varchar(50) NOT NULL,
    description varchar(200) NOT NULL,
    imgPath varchar(100) NOT NULL,
    CONSTRAINT HOTELS_pk PRIMARY KEY (hotel_id)
);

-- Table: HOTEL_REVIEWS
CREATE TABLE HOTEL_REVIEWS (
    hReview_id int(10) NOT NULL AUTO_INCREMENT,
    h_rating int(2) NULL,
    h_comments varchar(200) NOT NULL,
    h_id int(10) NOT NULL,
    hu_id int(10) NOT NULL,
    CONSTRAINT HOTEL_REVIEWS_pk PRIMARY KEY (hReview_id)
);

-- Table: RESTAURANTS
CREATE TABLE RESTAURANTS (
    rest_id int(10) NOT NULL AUTO_INCREMENT,
    name varchar(50) NOT NULL,
    address varchar(50) NOT NULL,
    countryName varchar(50) NOT NULL,
    description varchar(200) NOT NULL,
    imgPath varchar(100) NOT NULL,
    CONSTRAINT RESTAURANTS_pk PRIMARY KEY (rest_id)
);

-- Table: RESTAURANT_REVIEWS
CREATE TABLE RESTAURANT_REVIEWS (
    rrv_id int(10) NOT NULL AUTO_INCREMENT,
    r_rating int(5) NULL,
    r_comments varchar(200) NOT NULL,
    r_id int(10) NOT NULL,
    ru_id int(10) NOT NULL,
    CONSTRAINT RESTAURANT_REVIEWS_pk PRIMARY KEY (rrv_id)
);

-- Table: TOURIST_SITES
CREATE TABLE TOURIST_SITES (
    ts_id int(10) NOT NULL AUTO_INCREMENT,
    name varchar(50) NOT NULL,
    address varchar(50) NOT NULL,
    countryName varchar(50) NOT NULL,
    description varchar(200) NOT NULL,
    imgPath varchar(100) NOT NULL,
    CONSTRAINT TOURIST_SITES_pk PRIMARY KEY (ts_id)
);

-- Table: TOURIST_SITE_REVIEWS
CREATE TABLE TOURIST_SITE_REVIEWS (
    trv_id int(10) NOT NULL AUTO_INCREMENT,
    t_rating int(5) NULL,
    t_comments varchar(200) NOT NULL,
    t_id int(10) NOT NULL,
    tu_id int(10) NOT NULL,
    CONSTRAINT TOURIST_SITE_REVIEWS_pk PRIMARY KEY (trv_id)
);

-- Table: USERS
CREATE TABLE USERS (
    u_id int(10) NOT NULL AUTO_INCREMENT,
    Fullname varchar(50) NOT NULL,
    uName varchar(10) NOT NULL,
    email varchar(50) NULL,
    u_password varchar(50) NOT NULL,
    CONSTRAINT USERS_pk PRIMARY KEY (u_id)
);

-- Table: USER_CONCERN
CREATE TABLE USER_CONCERN (
    submitID int NOT NULL AUTO_INCREMENT,
    u_id int(10) NOT NULL,
    FullName varchar(50) NOT NULL,
    email varchar(50) NOT NULL,
    subject varchar(50) NOT NULL,
    review varchar(100) NOT NULL,
    CONSTRAINT USER_CONCERN_pk PRIMARY KEY (submitID)
);

-- foreign keys
-- Reference: FK_3 (table: HOTEL_REVIEWS)
ALTER TABLE HOTEL_REVIEWS ADD CONSTRAINT FK_3 FOREIGN KEY FK_3 (h_id)
    REFERENCES HOTELS (hotel_id);

-- Reference: FK_4 (table: HOTEL_REVIEWS)
ALTER TABLE HOTEL_REVIEWS ADD CONSTRAINT FK_4 FOREIGN KEY FK_4 (hu_id)
    REFERENCES USERS (u_id);

-- Reference: FK_5 (table: RESTAURANT_REVIEWS)
ALTER TABLE RESTAURANT_REVIEWS ADD CONSTRAINT FK_5 FOREIGN KEY FK_5 (r_id)
    REFERENCES RESTAURANTS (rest_id);

-- Reference: FK_6 (table: RESTAURANT_REVIEWS)
ALTER TABLE RESTAURANT_REVIEWS ADD CONSTRAINT FK_6 FOREIGN KEY FK_6 (ru_id)
    REFERENCES USERS (u_id);

-- Reference: FK_7 (table: TOURIST_SITE_REVIEWS)
ALTER TABLE TOURIST_SITE_REVIEWS ADD CONSTRAINT FK_7 FOREIGN KEY FK_7 (t_id)
    REFERENCES TOURIST_SITES (ts_id);

-- Reference: FK_8 (table: TOURIST_SITE_REVIEWS)
ALTER TABLE TOURIST_SITE_REVIEWS ADD CONSTRAINT FK_8 FOREIGN KEY FK_8 (tu_id)
    REFERENCES USERS (u_id);

-- Reference: USER_CONCERN_USERS (table: USER_CONCERN)
ALTER TABLE USER_CONCERN ADD CONSTRAINT USER_CONCERN_USERS FOREIGN KEY USER_CONCERN_USERS (u_id)
    REFERENCES USERS (u_id);

-- End of file.

