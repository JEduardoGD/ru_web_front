INSERT INTO USERS (id, NAME, email, email_verified_at, PASSWORD, created_at) VALUES (1, 'admin', 'admin@admin', NOW(), 'xxx',  NOW());

INSERT INTO blog_theme (id, theme, created_at) VALUES (1, 'Primer tema blog', NOW());

insert into blog_post (id, title, html, tags, user_id, visible, visible_since, created_at) VALUES(1, 'Primer blog titulo', '<h1>Primer blog titulo</h1>', 'primer,blog,titulo', 1, 1, NOW(), NOW());

insert into blog_theme_blog_post (id, blog_theme_id, blog_post_id) values (1, 1, 1);

INSERT INTO blog_image_header (id, filename, title, blog_post_id, created_at) VALUES (1, 'landscape-1-800x400.jpg', 'landscape-1-800x400', 1, NOW());
INSERT INTO blog_image_header (id, filename, title, blog_post_id, created_at) VALUES (2, 'landscape-3-800x400.jpg', 'landscape-3-800x400', 1, NOW());
INSERT INTO blog_image_header (id, filename, title, blog_post_id, created_at) VALUES (3, 'landscape-6-800x400.jpg', 'landscape-6-800x400', 1, NOW());

