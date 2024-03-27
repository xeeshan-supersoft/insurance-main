-- Auto Liability =  1
INSERT INTO policy_limits (`policy_type_id`, `coverage_item`, `nature_of_input`) values (1, 'COMBINED SINGLE LIMIT (EA accident)', 'text');
INSERT INTO policy_limits (`policy_type_id`, `coverage_item`, `nature_of_input`) values (1, 'BODILY INJURY (Per person)', 'text');
INSERT INTO policy_limits (`policy_type_id`, `coverage_item`, `nature_of_input`) values (1, 'BODILY INJURY (Per accident)', 'text');
INSERT INTO policy_limits (`policy_type_id`, `coverage_item`, `nature_of_input`) values (1, 'PROPERTY DAMAGE (Per accident)', 'text');

-- General Liability =  2
INSERT INTO policy_limits (`policy_type_id`, `coverage_item`, `nature_of_input`) values (2, 'EACH OCCURRENCE', 'text');
INSERT INTO policy_limits (`policy_type_id`, `coverage_item`, `nature_of_input`) values (2, 'DAMAGE TO RENTED PREMISES (EA Occurence)', 'text');
INSERT INTO policy_limits (`policy_type_id`, `coverage_item`, `nature_of_input`) values (2, 'MED EXP (Any one person)', 'text');
INSERT INTO policy_limits (`policy_type_id`, `coverage_item`, `nature_of_input`) values (2, 'PERSONAL & ADV INJURY', 'text');
INSERT INTO policy_limits (`policy_type_id`, `coverage_item`, `nature_of_input`) values (2, 'GENERAL AGGREGATE', 'text');
INSERT INTO policy_limits (`policy_type_id`, `coverage_item`, `nature_of_input`) values (2, 'PRODUCTS - COMP/OP AGG', 'text');

-- Cargo =  3
INSERT INTO policy_limits (`policy_type_id`, `coverage_item`, `nature_of_input`) values (3, 'LIMIT PER VEHICLE', 'text');

-- Trailer Interchange =  4
INSERT INTO policy_limits (`policy_type_id`, `coverage_item`, `nature_of_input`) values (4, 'LIMIT PER TRAILER', 'text');

-- Umbrella =  10
INSERT INTO policy_limits (`policy_type_id`, `coverage_item`, `nature_of_input`) values (10, 'EACH OCCURRENCE', 'text');
INSERT INTO policy_limits (`policy_type_id`, `coverage_item`, `nature_of_input`) values (10, 'AGGREGATE', 'text');

-- Employers Liability =  6
INSERT INTO policy_limits (`policy_type_id`, `coverage_item`, `nature_of_input`) values (6, 'WC STATUTORY LIMITS', 'check');
INSERT INTO policy_limits (`policy_type_id`, `coverage_item`, `nature_of_input`) values (6, 'OTHER', 'check');
INSERT INTO policy_limits (`policy_type_id`, `coverage_item`, `nature_of_input`) values (6, 'E.L. EACH ACCIDENT', 'text');
INSERT INTO policy_limits (`policy_type_id`, `coverage_item`, `nature_of_input`) values (6, 'E.L. DISEASE - EA EMPLOYEE', 'text');
INSERT INTO policy_limits (`policy_type_id`, `coverage_item`, `nature_of_input`) values (6, 'E.L. DISEASE - POLICY LIMIT', 'text');
INSERT INTO policy_limits (`policy_type_id`, `coverage_item`, `nature_of_input`) values (6, 'Unlimited Employers Liability Limits', 'check');

-- Contingent Cargo =  7
INSERT INTO policy_limits (`policy_type_id`, `coverage_item`, `nature_of_input`) values (7, 'Ded/Limit', 'text');
INSERT INTO policy_limits (`policy_type_id`, `coverage_item`, `nature_of_input`) values (7, 'Limit', 'text');

-- Ref. Trailer =  8
INSERT INTO policy_limits (`policy_type_id`, `coverage_item`, `nature_of_input`) values (8, 'Ded/Limit', 'text');
INSERT INTO policy_limits (`policy_type_id`, `coverage_item`, `nature_of_input`) values (8, 'Limit', 'text');

-- Employee Dishonesty =  9
INSERT INTO policy_limits (`policy_type_id`, `coverage_item`, `nature_of_input`) values (9, 'Ded/Limit', 'text');
INSERT INTO policy_limits (`policy_type_id`, `coverage_item`, `nature_of_input`) values (9, 'Limit', 'text');
