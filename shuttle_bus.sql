-- Adminer 4.8.1 PostgreSQL 17.0 (Debian 17.0-1.pgdg120+1) dump

DROP TABLE IF EXISTS "bus_routes";
DROP SEQUENCE IF EXISTS bus_routes_id_seq;
CREATE SEQUENCE bus_routes_id_seq INCREMENT 1 MINVALUE 1 MAXVALUE 9223372036854775807 CACHE 1;

CREATE TABLE "public"."bus_routes" (
    "id" bigint DEFAULT nextval('bus_routes_id_seq') NOT NULL,
    "name" character varying(255) NOT NULL,
    "last_stop_id" bigint NOT NULL,
    "direction" character varying(255),
    "created_at" timestamp(0),
    "updated_at" timestamp(0),
    CONSTRAINT "bus_routes_pkey" PRIMARY KEY ("id")
) WITH (oids = false);

CREATE INDEX "last_stop_idx" ON "public"."bus_routes" USING btree ("last_stop_id");

INSERT INTO "bus_routes" ("id", "name", "last_stop_id", "direction", "created_at", "updated_at") VALUES
(1,	'Автобус №95',	16,	'forward',	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(2,	'Автобус №95',	1,	'backward',	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(3,	'Автобус №111',	11,	'forward',	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(4,	'Автобус №111',	1,	'backward',	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(5,	'Автобус №27',	8,	'forward',	'2024-10-20 22:24:31',	'2024-10-20 22:24:31');

DROP TABLE IF EXISTS "failed_jobs";
DROP SEQUENCE IF EXISTS failed_jobs_id_seq;
CREATE SEQUENCE failed_jobs_id_seq INCREMENT 1 MINVALUE 1 MAXVALUE 9223372036854775807 CACHE 1;

CREATE TABLE "public"."failed_jobs" (
    "id" bigint DEFAULT nextval('failed_jobs_id_seq') NOT NULL,
    "uuid" character varying(255) NOT NULL,
    "connection" text NOT NULL,
    "queue" text NOT NULL,
    "payload" text NOT NULL,
    "exception" text NOT NULL,
    "failed_at" timestamp(0) DEFAULT CURRENT_TIMESTAMP NOT NULL,
    CONSTRAINT "failed_jobs_pkey" PRIMARY KEY ("id"),
    CONSTRAINT "failed_jobs_uuid_unique" UNIQUE ("uuid")
) WITH (oids = false);


DROP TABLE IF EXISTS "migrations";
DROP SEQUENCE IF EXISTS migrations_id_seq;
CREATE SEQUENCE migrations_id_seq INCREMENT 1 MINVALUE 1 MAXVALUE 2147483647 CACHE 1;

CREATE TABLE "public"."migrations" (
    "id" integer DEFAULT nextval('migrations_id_seq') NOT NULL,
    "migration" character varying(255) NOT NULL,
    "batch" integer NOT NULL,
    CONSTRAINT "migrations_pkey" PRIMARY KEY ("id")
) WITH (oids = false);

INSERT INTO "migrations" ("id", "migration", "batch") VALUES
(1,	'2014_10_12_000000_create_users_table',	1),
(2,	'2014_10_12_100000_create_password_reset_tokens_table',	1),
(3,	'2019_08_19_000000_create_failed_jobs_table',	1),
(4,	'2019_12_14_000001_create_personal_access_tokens_table',	1),
(5,	'2024_10_19_131340_create_stops_table',	1),
(6,	'2024_10_19_131357_create_bus_routes_table',	1),
(7,	'2024_10_19_131408_create_route_stops_table',	1),
(8,	'2024_10_19_131418_create_route_arrivals_table',	1);

DROP TABLE IF EXISTS "password_reset_tokens";
CREATE TABLE "public"."password_reset_tokens" (
    "email" character varying(255) NOT NULL,
    "token" character varying(255) NOT NULL,
    "created_at" timestamp(0),
    CONSTRAINT "password_reset_tokens_pkey" PRIMARY KEY ("email")
) WITH (oids = false);


DROP TABLE IF EXISTS "personal_access_tokens";
DROP SEQUENCE IF EXISTS personal_access_tokens_id_seq;
CREATE SEQUENCE personal_access_tokens_id_seq INCREMENT 1 MINVALUE 1 MAXVALUE 9223372036854775807 CACHE 1;

CREATE TABLE "public"."personal_access_tokens" (
    "id" bigint DEFAULT nextval('personal_access_tokens_id_seq') NOT NULL,
    "tokenable_type" character varying(255) NOT NULL,
    "tokenable_id" bigint NOT NULL,
    "name" character varying(255) NOT NULL,
    "token" character varying(64) NOT NULL,
    "abilities" text,
    "last_used_at" timestamp(0),
    "expires_at" timestamp(0),
    "created_at" timestamp(0),
    "updated_at" timestamp(0),
    CONSTRAINT "personal_access_tokens_pkey" PRIMARY KEY ("id"),
    CONSTRAINT "personal_access_tokens_token_unique" UNIQUE ("token")
) WITH (oids = false);

CREATE INDEX "personal_access_tokens_tokenable_type_tokenable_id_index" ON "public"."personal_access_tokens" USING btree ("tokenable_type", "tokenable_id");


DROP TABLE IF EXISTS "route_arrivals";
DROP SEQUENCE IF EXISTS route_arrivals_id_seq;
CREATE SEQUENCE route_arrivals_id_seq INCREMENT 1 MINVALUE 1 MAXVALUE 9223372036854775807 CACHE 1;

CREATE TABLE "public"."route_arrivals" (
    "id" bigint DEFAULT nextval('route_arrivals_id_seq') NOT NULL,
    "route_id" bigint NOT NULL,
    "stop_id" bigint NOT NULL,
    "arrival_time" time(0) without time zone NOT NULL,
    "created_at" timestamp(0),
    "updated_at" timestamp(0),
    CONSTRAINT "route_arrivals_pkey" PRIMARY KEY ("id")
) WITH (oids = false);

CREATE INDEX "arrival_route_idx" ON "public"."route_arrivals" USING btree ("route_id");

CREATE INDEX "arrival_stop_idx" ON "public"."route_arrivals" USING btree ("stop_id");

INSERT INTO "route_arrivals" ("id", "route_id", "stop_id", "arrival_time", "created_at", "updated_at") VALUES
(1,	1,	1,	'09:00:00',	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(2,	1,	1,	'11:00:00',	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(3,	1,	3,	'09:10:00',	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(4,	1,	3,	'11:15:00',	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(5,	1,	5,	'09:20:00',	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(6,	1,	5,	'10:25:00',	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(7,	1,	8,	'09:30:00',	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(8,	1,	8,	'11:35:00',	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(9,	1,	12,	'09:40:00',	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(10,	1,	12,	'11:45:00',	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(11,	1,	14,	'09:50:00',	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(12,	1,	14,	'11:55:00',	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(13,	1,	16,	'10:00:00',	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(14,	1,	16,	'12:05:00',	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(15,	2,	16,	'10:00:00',	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(16,	2,	16,	'12:05:00',	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(17,	2,	14,	'10:10:00',	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(18,	2,	14,	'12:20:00',	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(19,	2,	12,	'10:20:00',	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(20,	2,	12,	'12:30:00',	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(21,	2,	8,	'10:30:00',	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(22,	2,	8,	'12:40:00',	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(23,	2,	5,	'10:40:00',	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(24,	2,	5,	'12:50:00',	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(25,	2,	3,	'10:50:00',	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(26,	2,	3,	'13:00:00',	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(27,	2,	1,	'11:00:00',	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(28,	2,	1,	'13:10:00',	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(29,	1,	1,	'13:10:00',	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(30,	1,	3,	'13:25:00',	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(31,	1,	5,	'13:35:00',	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(32,	1,	8,	'13:45:00',	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(33,	1,	12,	'13:55:00',	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(34,	1,	14,	'14:05:00',	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(35,	1,	16,	'14:15:00',	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(36,	5,	6,	'09:05:00',	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(37,	5,	3,	'09:15:00',	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(38,	5,	5,	'09:25:00',	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(39,	5,	4,	'09:35:00',	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(40,	5,	8,	'09:45:00',	'2024-10-20 22:24:31',	'2024-10-20 22:24:31');

DROP TABLE IF EXISTS "route_stops";
DROP SEQUENCE IF EXISTS route_stops_id_seq;
CREATE SEQUENCE route_stops_id_seq INCREMENT 1 MINVALUE 1 MAXVALUE 9223372036854775807 CACHE 1;

CREATE TABLE "public"."route_stops" (
    "id" bigint DEFAULT nextval('route_stops_id_seq') NOT NULL,
    "route_id" bigint NOT NULL,
    "stop_id" bigint NOT NULL,
    "order" integer NOT NULL,
    "created_at" timestamp(0),
    "updated_at" timestamp(0),
    CONSTRAINT "route_stops_pkey" PRIMARY KEY ("id")
) WITH (oids = false);

CREATE INDEX "route_stops_route_idx" ON "public"."route_stops" USING btree ("route_id");

CREATE INDEX "route_stops_stop_idx" ON "public"."route_stops" USING btree ("stop_id");

INSERT INTO "route_stops" ("id", "route_id", "stop_id", "order", "created_at", "updated_at") VALUES
(1,	1,	1,	1,	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(2,	1,	3,	2,	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(3,	1,	5,	3,	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(4,	1,	8,	4,	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(5,	1,	12,	5,	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(6,	1,	14,	6,	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(7,	1,	16,	7,	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(8,	2,	16,	1,	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(9,	2,	14,	2,	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(10,	2,	12,	3,	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(11,	2,	8,	4,	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(12,	2,	5,	5,	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(13,	2,	3,	6,	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(14,	2,	1,	7,	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(15,	5,	6,	1,	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(16,	5,	3,	2,	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(17,	5,	5,	3,	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(18,	5,	4,	4,	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(19,	5,	8,	5,	'2024-10-20 22:24:31',	'2024-10-20 22:24:31');

DROP TABLE IF EXISTS "stops";
DROP SEQUENCE IF EXISTS stops_id_seq;
CREATE SEQUENCE stops_id_seq INCREMENT 1 MINVALUE 1 MAXVALUE 9223372036854775807 CACHE 1;

CREATE TABLE "public"."stops" (
    "id" bigint DEFAULT nextval('stops_id_seq') NOT NULL,
    "name" character varying(255) NOT NULL,
    "created_at" timestamp(0),
    "updated_at" timestamp(0),
    CONSTRAINT "stops_pkey" PRIMARY KEY ("id")
) WITH (oids = false);

INSERT INTO "stops" ("id", "name", "created_at", "updated_at") VALUES
(1,	'Остановка №1',	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(2,	'Остановка №2',	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(3,	'Остановка №3',	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(4,	'Остановка №4',	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(5,	'Остановка №5',	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(6,	'Остановка №6',	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(7,	'Остановка №7',	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(8,	'Остановка №8',	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(9,	'Остановка №9',	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(10,	'Остановка №10',	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(11,	'Остановка №11',	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(12,	'Остановка №12',	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(13,	'Остановка №13',	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(14,	'Остановка №14',	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(15,	'Остановка №15',	'2024-10-20 22:24:31',	'2024-10-20 22:24:31'),
(16,	'Остановка №16',	'2024-10-20 22:24:31',	'2024-10-20 22:24:31');

DROP TABLE IF EXISTS "users";
DROP SEQUENCE IF EXISTS users_id_seq;
CREATE SEQUENCE users_id_seq INCREMENT 1 MINVALUE 1 MAXVALUE 9223372036854775807 CACHE 1;

CREATE TABLE "public"."users" (
    "id" bigint DEFAULT nextval('users_id_seq') NOT NULL,
    "name" character varying(255) NOT NULL,
    "email" character varying(255) NOT NULL,
    "email_verified_at" timestamp(0),
    "password" character varying(255) NOT NULL,
    "remember_token" character varying(100),
    "created_at" timestamp(0),
    "updated_at" timestamp(0),
    CONSTRAINT "users_email_unique" UNIQUE ("email"),
    CONSTRAINT "users_pkey" PRIMARY KEY ("id")
) WITH (oids = false);


ALTER TABLE ONLY "public"."bus_routes" ADD CONSTRAINT "bus_routes_last_stop_id_foreign" FOREIGN KEY (last_stop_id) REFERENCES stops(id) ON DELETE SET NULL NOT DEFERRABLE;

ALTER TABLE ONLY "public"."route_arrivals" ADD CONSTRAINT "route_arrivals_route_id_foreign" FOREIGN KEY (route_id) REFERENCES bus_routes(id) ON UPDATE CASCADE ON DELETE CASCADE NOT DEFERRABLE;
ALTER TABLE ONLY "public"."route_arrivals" ADD CONSTRAINT "route_arrivals_stop_id_foreign" FOREIGN KEY (stop_id) REFERENCES stops(id) ON UPDATE CASCADE ON DELETE CASCADE NOT DEFERRABLE;

ALTER TABLE ONLY "public"."route_stops" ADD CONSTRAINT "route_stops_route_id_foreign" FOREIGN KEY (route_id) REFERENCES bus_routes(id) ON UPDATE CASCADE ON DELETE CASCADE NOT DEFERRABLE;
ALTER TABLE ONLY "public"."route_stops" ADD CONSTRAINT "route_stops_stop_id_foreign" FOREIGN KEY (stop_id) REFERENCES stops(id) ON UPDATE CASCADE ON DELETE CASCADE NOT DEFERRABLE;

-- 2024-10-20 22:38:39.18162+00
