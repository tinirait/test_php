select cities.name, (COALESCE(to_city.count, 0) + COALESCE(from_city.count, 0)) as "c" from cities
left join
  (select cities.name, count(cities.name) from transactions
   join persons on persons.id=transactions.to_person_id
   join cities on cities.id=persons.city_id
   group by cities.name) as to_city
   on to_city.name=cities.name
left join
   (select cities.name, count(cities.name) from transactions
   join persons on persons.id=transactions.from_person_id
   join cities on cities.id=persons.city_id
   group by cities.name) as from_city
   on from_city.name=cities.name
where cities.name=from_city.name or cities.name=to_city.name order by c desc LIMIT 1;