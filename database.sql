CREATE DATABASE pet_hotel;

CREATE TABLE owners (
"id" serial PRIMARY KEY,
"name" VARCHAR
);

CREATE TABLE pets (
"id" serial PRIMARY KEY,
"owner_id" VARCHAR REFERENCES "owners"
"petname" VARCHAR,
"breed" VARCHAR,
"color" VARCHAR,
"checked_in" BOOLEAN
);


