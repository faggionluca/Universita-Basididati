/*INSERT INTO User VALUES (null,'Luca','Faggion','1995-12-04','lucafaggion','$2y$10$4K7U5eQDrsWkdP3B3qYQounKJG/UDAsY/VtAPqbv4aD3nsZoZd0CK');*/
INSERT INTO Role VALUES 
	(null,'SUPERADMIN'),
    (null,'ADMIN'),
    (null,'USER');
INSERT INTO UserRole VALUES (null,1,3);