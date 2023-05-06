-- Solution for Puzzle 3

SELECT
    user.user_id,
    user.first_name,
    user.last_name,
    AVG(test_result.correct) AS avg_correct,
    MAX(test_result.time_taken) AS last_test_time
FROM
    user
LEFT JOIN test_result ON user.user_id = test_result.user_id
GROUP BY
    user.user_id
ORDER BY
    user.user_id ASC;