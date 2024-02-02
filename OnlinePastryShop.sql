PGDMP                      |            postgres    16.1    16.1 /    X           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            Y           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            Z           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            [           1262    5    postgres    DATABASE     |   CREATE DATABASE postgres WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'Russian_Russia.1251';
    DROP DATABASE postgres;
                postgres    false            \           0    0    DATABASE postgres    COMMENT     N   COMMENT ON DATABASE postgres IS 'default administrative connection database';
                   postgres    false    4955                        2615    16626    data    SCHEMA        CREATE SCHEMA data;
    DROP SCHEMA data;
                postgres    false            	            2615    16779    pgagent    SCHEMA        CREATE SCHEMA pgagent;
    DROP SCHEMA pgagent;
                postgres    false            ]           0    0    SCHEMA pgagent    COMMENT     6   COMMENT ON SCHEMA pgagent IS 'pgAgent system tables';
                   postgres    false    9                        3079    16384 	   adminpack 	   EXTENSION     A   CREATE EXTENSION IF NOT EXISTS adminpack WITH SCHEMA pg_catalog;
    DROP EXTENSION adminpack;
                   false            ^           0    0    EXTENSION adminpack    COMMENT     M   COMMENT ON EXTENSION adminpack IS 'administrative functions for PostgreSQL';
                        false    2                        3079    16780    pgagent 	   EXTENSION     <   CREATE EXTENSION IF NOT EXISTS pgagent WITH SCHEMA pgagent;
    DROP EXTENSION pgagent;
                   false    9            _           0    0    EXTENSION pgagent    COMMENT     >   COMMENT ON EXTENSION pgagent IS 'A PostgreSQL job scheduler';
                        false    3            �            1259    16627    cake    TABLE     �   CREATE TABLE data.cake (
    id integer NOT NULL,
    name text,
    id_category integer,
    weight integer,
    price integer,
    description text,
    id_filling integer,
    id_type integer
);
    DROP TABLE data.cake;
       data         heap    postgres    false    8            �            1259    16632    category    TABLE     G   CREATE TABLE data.category (
    id integer NOT NULL,
    name text
);
    DROP TABLE data.category;
       data         heap    postgres    false    8            �            1259    16637    client    TABLE     Y   CREATE TABLE data.client (
    id integer NOT NULL,
    name text,
    phone_num text
);
    DROP TABLE data.client;
       data         heap    postgres    false    8            �            1259    16642    filling    TABLE     F   CREATE TABLE data.filling (
    id integer NOT NULL,
    name text
);
    DROP TABLE data.filling;
       data         heap    postgres    false    8            �            1259    16647    order    TABLE     e   CREATE TABLE data."order" (
    id_client integer,
    id_order integer NOT NULL,
    sum integer
);
    DROP TABLE data."order";
       data         heap    postgres    false    8            �            1259    16650 
   order_list    TABLE     �   CREATE TABLE data.order_list (
    id_order integer NOT NULL,
    id_cake integer NOT NULL,
    amount integer,
    one_cake_price integer
);
    DROP TABLE data.order_list;
       data         heap    postgres    false    8            �            1259    16653    type    TABLE     C   CREATE TABLE data.type (
    id integer NOT NULL,
    name text
);
    DROP TABLE data.type;
       data         heap    postgres    false    8            O          0    16627    cake 
   TABLE DATA           d   COPY data.cake (id, name, id_category, weight, price, description, id_filling, id_type) FROM stdin;
    data          postgres    false    221   �-       P          0    16632    category 
   TABLE DATA           *   COPY data.category (id, name) FROM stdin;
    data          postgres    false    222   �0       Q          0    16637    client 
   TABLE DATA           3   COPY data.client (id, name, phone_num) FROM stdin;
    data          postgres    false    223   J1       R          0    16642    filling 
   TABLE DATA           )   COPY data.filling (id, name) FROM stdin;
    data          postgres    false    224   62       S          0    16647    order 
   TABLE DATA           9   COPY data."order" (id_client, id_order, sum) FROM stdin;
    data          postgres    false    225   �2       T          0    16650 
   order_list 
   TABLE DATA           M   COPY data.order_list (id_order, id_cake, amount, one_cake_price) FROM stdin;
    data          postgres    false    226   �2       U          0    16653    type 
   TABLE DATA           &   COPY data.type (id, name) FROM stdin;
    data          postgres    false    227   �2       d          0    16781    pga_jobagent 
   TABLE DATA           I   COPY pgagent.pga_jobagent (jagpid, jaglogintime, jagstation) FROM stdin;
    pgagent          postgres    false    228   A3       e          0    16790    pga_jobclass 
   TABLE DATA           7   COPY pgagent.pga_jobclass (jclid, jclname) FROM stdin;
    pgagent          postgres    false    230   �3       f          0    16800    pga_job 
   TABLE DATA           �   COPY pgagent.pga_job (jobid, jobjclid, jobname, jobdesc, jobhostagent, jobenabled, jobcreated, jobchanged, jobagentid, jobnextrun, joblastrun) FROM stdin;
    pgagent          postgres    false    232   �3       h          0    16848    pga_schedule 
   TABLE DATA           �   COPY pgagent.pga_schedule (jscid, jscjobid, jscname, jscdesc, jscenabled, jscstart, jscend, jscminutes, jschours, jscweekdays, jscmonthdays, jscmonths) FROM stdin;
    pgagent          postgres    false    236   ?4       i          0    16876    pga_exception 
   TABLE DATA           J   COPY pgagent.pga_exception (jexid, jexscid, jexdate, jextime) FROM stdin;
    pgagent          postgres    false    238   �4       j          0    16890 
   pga_joblog 
   TABLE DATA           X   COPY pgagent.pga_joblog (jlgid, jlgjobid, jlgstatus, jlgstart, jlgduration) FROM stdin;
    pgagent          postgres    false    240   �4       g          0    16824    pga_jobstep 
   TABLE DATA           �   COPY pgagent.pga_jobstep (jstid, jstjobid, jstname, jstdesc, jstenabled, jstkind, jstcode, jstconnstr, jstdbname, jstonerror, jscnextrun) FROM stdin;
    pgagent          postgres    false    234   �6       k          0    16906    pga_jobsteplog 
   TABLE DATA           |   COPY pgagent.pga_jobsteplog (jslid, jsljlgid, jsljstid, jslstatus, jslresult, jslstart, jslduration, jsloutput) FROM stdin;
    pgagent          postgres    false    242   :7       �           2606    16659    cake cake_pkey 
   CONSTRAINT     J   ALTER TABLE ONLY data.cake
    ADD CONSTRAINT cake_pkey PRIMARY KEY (id);
 6   ALTER TABLE ONLY data.cake DROP CONSTRAINT cake_pkey;
       data            postgres    false    221            �           2606    16661    category category_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY data.category
    ADD CONSTRAINT category_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY data.category DROP CONSTRAINT category_pkey;
       data            postgres    false    222            �           2606    16663    client client_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY data.client
    ADD CONSTRAINT client_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY data.client DROP CONSTRAINT client_pkey;
       data            postgres    false    223            �           2606    16665    filling filling_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY data.filling
    ADD CONSTRAINT filling_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY data.filling DROP CONSTRAINT filling_pkey;
       data            postgres    false    224            �           2606    16667    order_list order_list_pkey 
   CONSTRAINT     e   ALTER TABLE ONLY data.order_list
    ADD CONSTRAINT order_list_pkey PRIMARY KEY (id_order, id_cake);
 B   ALTER TABLE ONLY data.order_list DROP CONSTRAINT order_list_pkey;
       data            postgres    false    226    226            �           2606    16669    order order_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY data."order"
    ADD CONSTRAINT order_pkey PRIMARY KEY (id_order);
 :   ALTER TABLE ONLY data."order" DROP CONSTRAINT order_pkey;
       data            postgres    false    225            �           2606    16671    type type_pkey 
   CONSTRAINT     J   ALTER TABLE ONLY data.type
    ADD CONSTRAINT type_pkey PRIMARY KEY (id);
 6   ALTER TABLE ONLY data.type DROP CONSTRAINT type_pkey;
       data            postgres    false    227            �           2606    16672    order_list fk_cake    FK CONSTRAINT     v   ALTER TABLE ONLY data.order_list
    ADD CONSTRAINT fk_cake FOREIGN KEY (id_cake) REFERENCES data.cake(id) NOT VALID;
 :   ALTER TABLE ONLY data.order_list DROP CONSTRAINT fk_cake;
       data          postgres    false    226    4758    221            �           2606    16677    cake fk_category    FK CONSTRAINT     |   ALTER TABLE ONLY data.cake
    ADD CONSTRAINT fk_category FOREIGN KEY (id_category) REFERENCES data.category(id) NOT VALID;
 8   ALTER TABLE ONLY data.cake DROP CONSTRAINT fk_category;
       data          postgres    false    221    4760    222            �           2606    16682    order fk_client    FK CONSTRAINT     y   ALTER TABLE ONLY data."order"
    ADD CONSTRAINT fk_client FOREIGN KEY (id_client) REFERENCES data.client(id) NOT VALID;
 9   ALTER TABLE ONLY data."order" DROP CONSTRAINT fk_client;
       data          postgres    false    225    223    4762            �           2606    16687    cake fk_filling    FK CONSTRAINT     y   ALTER TABLE ONLY data.cake
    ADD CONSTRAINT fk_filling FOREIGN KEY (id_filling) REFERENCES data.filling(id) NOT VALID;
 7   ALTER TABLE ONLY data.cake DROP CONSTRAINT fk_filling;
       data          postgres    false    221    224    4764            �           2606    16692    order_list fk_order    FK CONSTRAINT     �   ALTER TABLE ONLY data.order_list
    ADD CONSTRAINT fk_order FOREIGN KEY (id_order) REFERENCES data."order"(id_order) NOT VALID;
 ;   ALTER TABLE ONLY data.order_list DROP CONSTRAINT fk_order;
       data          postgres    false    4766    226    225            �           2606    16697    cake fk_type    FK CONSTRAINT     p   ALTER TABLE ONLY data.cake
    ADD CONSTRAINT fk_type FOREIGN KEY (id_type) REFERENCES data.type(id) NOT VALID;
 4   ALTER TABLE ONLY data.cake DROP CONSTRAINT fk_type;
       data          postgres    false    227    4770    221            O   �  x�uT�n�@}^ŪϦ�����R_��H�ȥ@E+��HE|��ƭ���/�����i��H����3sΜ���oI��{7�ZRw-k�沑���/Ld�^�ăQ�ȭd��SIql���T~i��}v7qs��RcaF���¡���dV)��(���m��O�Ot��o���2y���&�&~�~h�/%Kq��ʖQ�4�RHVig���\J˼䀐2|��J�B3o���WD<�h�� Cw:�d$�)+EЕ��T	7����,��'$���ACc~�s�-L���牢LC���V&Śj�L�@�;M������{S����ջ��J�UѴ�
�����>\�7o?�CUg&�&��X5���Y5�WX���:,��Q`�CN�M�/�B��͆/}aX��y[��� ,<�o�1�j5����	wu����c�75���N 3��9�]3��X�5�g��A�,k�n�Ӯ�W٠Ҍ+d��^�^>�B.!�)E�"���ᓲ{�f�D� �>�q���zh�c߅i{�D�[�Y�݄C�>�BR���T��vE�R��LV3��[�����ߧ�F8�q0fK�3�Rn� o� �q�hl��wE�{��XT|N�C�~�q�#3�t�jչ�L��k|�tR5�A�܌y�2o����ht��i� ��y      P   �   x�=��	1���Ul���\֠��x��;��yA���َ�������ov�7E�"�H�X����"*<�mk�H�Zg$�s��v$��h�.J���*#	�qe�gdʓ$B�r�p-��i��~�d�p�_^�SJ<HG���� �yd      Q   �   x�U�Mj�0���)�/��$[�]|��!	�n�"�IvY�R���nԑ	�A�<�o*.q�_����f8��-6��1q���	m��k��yi�4G�^Pv��x6�iz�KC�hM�T�!n�B��]�N��X#�m��2E��»ܱL	��=�zt��0d8��Âv�QA%Y�s��J˘x���`L1�2�R�?:(�ה+K��>����T      R   >   x�3估�¾��x���\�{���N.#��/l
��9/̺�pa�=@�M`�=... ?�&�      S   '   x�3�4�4��0�2�B3S.cNcN#KCS�=... S��      T   '   x�3�4A#c.CN#Nc(������ 90+F��� ��:      U   ?   x�3�0���]�va녽@z+�!�E�]l���e�yaօ�_���yaW� ��8      d   >   x��0�0�4202�50"C+C#+##=KSKmSN�`�� ]s�0gg�=... <
F      e      x������ � �      f   �   x���1
�0��Y>��#ɒm����4J�`�!�o2tI����A��������S�70r����kv�T�)��:���>�#�#:Jj����	�����`U�欩�a��u�;K#���P�VE6jL!�/Z�.�      h   r   x�3�4�LI���,�4202�54�50W04�2��20�60���W����`��cs	��$H�	x!nj��8�8�2��KЃ����=HMP���x��� )����A���� ���+      i      x������ � �      j   �  x�m�Mn�0���)��������Fy���N�,��&E���'���q*N��"�Cv��o��L?1r&���� �ɇ<0�: �A��i���'��I�"^u�2l�3���rɍq���	��͏���F���^�V+h�#�΍��(ɚ5�4G|C̮�̰EF����E�ڲe�	�Sb�ut�B0c�T�ڿ�>�*%G��V��`���"��Sdnl1���/(��ֹ`����P��zH�� k�L	��*}CW����\)k@?�f�ԭ�!N�)���E�u���w��N�V%��xF��YE^qA�9�*��[ᙃ�*�[I��3��=���ڈ��ĳ4�7�B�=���[I���bUba���F\з�$q��֞�F@�맀��l��<��1��+9�=�m��_s��t���      g   �   x�-�Q�0��_q��
a>�S��\8�A])�����✧������z� �<]1V�y�+<��y��Q���N��!m�� ��%p]�2����?����,�����(�e_����f��.Y�.Mfnt��=�2ƾ+B,�      k   �  x�͗�nA���S,iH�ڙ��?G�P�HQ�H��@&v R���H�$t�C��H�h��o�\����\l�k�e��i����9P �cy�E�ܲAC�T�:6mZV�V�� �SO�N���v8�}}4��G���HO�z�n��I�M�|���
�TY06��\�R	�u"������%�\"VM�9�!G@*!��eDw�2���X���w#�4>��@�BP��@X�h|b��N�v"�؉�~�d"yJ�NxQ���T��=V[9���l��N�H�?������^�����.�?������w=�k��������dM�wS=�4��}��r���.����hwgo[C�w�����������~�d������������&l�t��U���]�o6����R ����n��İ`IE��`"��>kcH6�{I���$�]5���A�s�m#1!�pMb��5Zq���8�`�U3G[��D�r��PB�!��*[���pI��^%/��τ#��(l@��/wC���ض/�,�O�=`o� t���`C�j�<1WM �n6HPp��2�έ�nI5���uC0d���/� %�B�a��-2J�f��\Xa{��|t��&%9�󒼇��Pbr���Mb�x7���w��
G
�\ �G��h��W%�I&,�B�i���c>�G\e�Xa�n�i��R>[���%�;����-���ڔ�&&Z�ԇ����]     