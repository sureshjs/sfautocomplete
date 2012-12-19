CREATE VIEW searchResults
  AS SELECT CONCAT('a', id) AS id, name, genre AS three, imagelarge AS four FROM artist 
  UNION SELECT CONCAT('e', id) AS id, name, startdate AS three, year AS six FROM event 
  UNION SELECT CONCAT('u', id) AS id, CONCAT(firstname, ' ', lastname), fb_id, email FROM user; 