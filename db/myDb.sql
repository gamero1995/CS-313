DROP TABLE appointments;
DROP TABLE member;
DROP TABLE services;
DROP TABLE type_service;

CREATE TABLE member 
(   member_id  SERIAL PRIMARY KEY,
    f_name   VARCHAR(50) NOT NULL,
    l_name   VARCHAR(50) NOT NULL,
    email    VARCHAR(50) NOT NULL
);

CREATE TABLE type_service
(   type_service_id SERIAL PRIMARY KEY,
    type_service_title VARCHAR(50) NOT NULL
);

CREATE TABLE services
(   services_id SERIAL PRIMARY KEY,
    sevices_name VARCHAR(50) NOT NULL,
    services_description VARCHAR(100) NOT NULL,
    services_price INT NOT NULL,
    type_service_id INT NOT NULL REFERENCES type_service(type_service_id)
);

CREATE TABLE appointments 
(   appointment_id SERIAL PRIMARY KEY,
    appt_time    TIMESTAMP NOT NULL,
    member_id    INT NOT NULL REFERENCES member(member_id),
    services_id    INT NOT NULL REFERENCES services (services_id)
);


INSERT INTO type_service (type_service_title) VALUES ('Hair Cut');
INSERT INTO type_service (type_service_title) VALUES ('Dye');
INSERT INTO type_service (type_service_title) VALUES ('Manicure');
INSERT INTO type_service (type_service_title) VALUES ('Pedicure');
INSERT INTO type_service (type_service_title) VALUES ('Make Up');
INSERT INTO type_service (type_service_title) VALUES ('Facial');

INSERT INTO services (sevices_name, services_description, services_price, type_service_id) VALUES ('Short Hair', 'Basic Short Hair Haircut', 20, 1);
INSERT INTO services (sevices_name, services_description, services_price, type_service_id) VALUES ('Basic Dye', 'Any Color Hair Dye', 20, 2);
INSERT INTO services (sevices_name, services_description, services_price, type_service_id) VALUES ('Basic Manicure', 'One color with one design', 10, 3);
INSERT INTO services (sevices_name, services_description, services_price, type_service_id) VALUES ('Basic Pedicure', 'One color with cleaing of toe nails', 15, 4);
INSERT INTO services (sevices_name, services_description, services_price, type_service_id) VALUES ('Basic Make Up', 'Eye shadows and mascara', 25, 5);
INSERT INTO services (sevices_name, services_description, services_price, type_service_id) VALUES ('Basic Facial', 'Pore cleaning with pickles on your eyes', 25,6);

