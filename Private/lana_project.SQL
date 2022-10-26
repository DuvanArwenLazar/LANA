CREATE TABLE IF NOT EXISTS tbl_user(
    id_u int(11) PRIMARY KEY AUTO_INCREMENT,
    username_u varchar(15) NOT NULL UNIQUE,
    bio_u varchar(500)
    );

CREATE TABLE IF NOT EXISTS tbl_post(
    id_post int(11) PRIMARY KEY AUTO_INCREMENT,
    img_post varchar(15) NOT NULL UNIQUE,
    pfp_post varchar(500)
    );

