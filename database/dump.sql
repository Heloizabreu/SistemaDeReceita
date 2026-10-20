--
-- PostgreSQL database dump
--

\restrict 6LN7HHpckEWTnYRsra6Oeym0XrFFgCxMtIQ3Vl5r7hjkrscW4Re4TKgqFNfuNLQ

-- Dumped from database version 18.4 (Ubuntu 18.4-0ubuntu0.26.04.1)
-- Dumped by pg_dump version 18.4 (Ubuntu 18.4-0ubuntu0.26.04.1)

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET transaction_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: receitas; Type: TABLE; Schema: public; Owner: receitas
--

CREATE TABLE public.receitas (
    id integer NOT NULL,
    nome character varying(100) NOT NULL,
    tempo character varying(50) NOT NULL,
    ingredientes text NOT NULL,
    preparo text
);


ALTER TABLE public.receitas OWNER TO receitas;

--
-- Name: receitas_id_seq; Type: SEQUENCE; Schema: public; Owner: receitas
--

CREATE SEQUENCE public.receitas_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.receitas_id_seq OWNER TO receitas;

--
-- Name: receitas_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: receitas
--

ALTER SEQUENCE public.receitas_id_seq OWNED BY public.receitas.id;


--
-- Name: usuarios; Type: TABLE; Schema: public; Owner: receitas
--

CREATE TABLE public.usuarios (
    id integer NOT NULL,
    email character varying(100) NOT NULL,
    senha character varying(255) NOT NULL
);


ALTER TABLE public.usuarios OWNER TO receitas;

--
-- Name: usuarios_id_seq; Type: SEQUENCE; Schema: public; Owner: receitas
--

CREATE SEQUENCE public.usuarios_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.usuarios_id_seq OWNER TO receitas;

--
-- Name: usuarios_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: receitas
--

ALTER SEQUENCE public.usuarios_id_seq OWNED BY public.usuarios.id;


--
-- Name: receitas id; Type: DEFAULT; Schema: public; Owner: receitas
--

ALTER TABLE ONLY public.receitas ALTER COLUMN id SET DEFAULT nextval('public.receitas_id_seq'::regclass);


--
-- Name: usuarios id; Type: DEFAULT; Schema: public; Owner: receitas
--

ALTER TABLE ONLY public.usuarios ALTER COLUMN id SET DEFAULT nextval('public.usuarios_id_seq'::regclass);


--
-- Data for Name: receitas; Type: TABLE DATA; Schema: public; Owner: receitas
--

COPY public.receitas (id, nome, tempo, ingredientes, preparo) FROM stdin;
11	Brigadeiro	15 minutos	1 xícara de farinha de trigo, 1 colher de sopa de açúcar, 1 colher de chá de fermento em pó, 1 ovo, 3/4 xícara de leite, 2 colheres de sopa de manteiga derretida.	\N
12	Bolo de Cenoura com Cobertura de Chocolate	45 minutos	3 cenouras médias, 3 ovos, 1/2 xícara de óleo, 2 xícaras de açúcar, 2 xícaras de farinha de trigo, 1 colher de sopa de fermento em pó, chocolate em pó e manteiga para a calda.	\N
13	Mousse de Limão	10 minutos	1 lata de leite condensado, 1 caixa de creme de leite, 1/2 xícara de suco de limão espremido na hora, raspas de limão para decorar.	\N
\.


--
-- Data for Name: usuarios; Type: TABLE DATA; Schema: public; Owner: receitas
--

COPY public.usuarios (id, email, senha) FROM stdin;
1	o@o.com	123456
2	yuri@hotmail.com	1234
3	heloiza.abreu@gmail.com	ana64ana
6	ana.abreu@gmail.com	ana64ana
\.


--
-- Name: receitas_id_seq; Type: SEQUENCE SET; Schema: public; Owner: receitas
--

SELECT pg_catalog.setval('public.receitas_id_seq', 13, true);


--
-- Name: usuarios_id_seq; Type: SEQUENCE SET; Schema: public; Owner: receitas
--

SELECT pg_catalog.setval('public.usuarios_id_seq', 6, true);


--
-- Name: receitas receitas_pkey; Type: CONSTRAINT; Schema: public; Owner: receitas
--

ALTER TABLE ONLY public.receitas
    ADD CONSTRAINT receitas_pkey PRIMARY KEY (id);


--
-- Name: usuarios usuarios_email_key; Type: CONSTRAINT; Schema: public; Owner: receitas
--

ALTER TABLE ONLY public.usuarios
    ADD CONSTRAINT usuarios_email_key UNIQUE (email);


--
-- Name: usuarios usuarios_pkey; Type: CONSTRAINT; Schema: public; Owner: receitas
--

ALTER TABLE ONLY public.usuarios
    ADD CONSTRAINT usuarios_pkey PRIMARY KEY (id);


--
-- PostgreSQL database dump complete
--

\unrestrict 6LN7HHpckEWTnYRsra6Oeym0XrFFgCxMtIQ3Vl5r7hjkrscW4Re4TKgqFNfuNLQ

