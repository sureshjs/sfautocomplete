CREATE VIEW searchResults
  AS SELECT CONCAT('a', id) AS id, name, genre AS three, imagelarge AS four FROM Artist 
  UNION SELECT CONCAT('e', id) AS id, name, startdate AS three, year AS six FROM Event 
  UNION SELECT CONCAT('u', id) AS id, CONCAT(firstname, ' ', lastname), fb_id, email FROM User; 
