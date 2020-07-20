-- a
select persons.fullname as "Имя", (to_id.amount - from_id.amount)+100 as "Баланс" FROM persons,
(select transactions.to_person_id as id, sum(transactions.amount) as amount FROM transactions group by transactions.to_person_id)
as to_id ,
(select transactions.from_person_id as id, sum(transactions.amount) as amount FROM transactions group by transactions.from_person_id)
as from_id
WHERE persons.id=to_id.id and persons.id = from_id.id;

--b - немного не успел дописать по SELECT  можно получить количество повторений для определенного ИД человека а дальше как не пробовал не получилось. Буду рад получить ответ по заданию :)


 -- select from_person.povtor_from, toPerson.povtor_to, from_person.id as from_id, toPerson.id as to_id  FROM persons,
-- (select count(transactions.from_person_id) AS povtor_from, transactions.from_person_id as id from transactions GROUP BY from_person_id) as from_person,
-- (select count(transactions.to_person_id) AS povtor_to, transactions.to_person_id as id from transactions GROUP BY to_person_id ) as toPerson

--C
select transactions.* from transactions
join persons as from_per on from_per.id=transactions.from_person_id
join persons as to_per on to_per.id=transactions.to_person_id
where from_per.city_id=to_per.city_id;