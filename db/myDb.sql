DROP TABLE appointments;
DROP TABLE member;
DROP TABLE services;

CREATE TABLE member (
    member_id  SERIAL PRIMARY KEY,
    f_name   VARCHAR(50) NOT NULL,
    l_name   VARCHAR(50) NOT NULL,
    email    VARCHAR(50) NOT NULL
);

CREATE TABLE services (
    service_id SERIAL PRIMARY KEY,
    sevice_name VARCHAR(50) NOT NULL,
    service_description VARCHAR(100) NOT NULL,
    service_price INT NOT NULL,
);

CREATE TABLE appointments (
    appointment_id SERIAL PRIMARY KEY,
    appt_time    TIMESTAMP NOT NULL,
    member_id    INT NOT NULL REFERENCES member(member_id),
    service_id    INT NOT NULL REFERENCES services (service_id),

);