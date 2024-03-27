-- Auto Liability =  1
INSERT INTO policies (`policy_type_id`, `policy_title`) values (1, 'ANY AUTO');
INSERT INTO policies (`policy_type_id`, `policy_title`) values (1, 'OWNED AUTOS ONLY');
INSERT INTO policies (`policy_type_id`, `policy_title`) values (1, 'SCHEDULED AUTOS');
INSERT INTO policies (`policy_type_id`, `policy_title`) values (1, 'HIRED AUTOS');
INSERT INTO policies (`policy_type_id`, `policy_title`) values (1, 'NON-OWNED AUTOS');
INSERT INTO policies (`policy_type_id`, `policy_title`) values (1, 'DEDUCTIBLE');

-- General Liability =  2
INSERT INTO policies (`policy_type_id`, `policy_title`) values (2, 'COMMERCIAL GENERAL LIABILITY');
INSERT INTO policies (`policy_type_id`, `policy_title`) values (2, 'CLAIMS-MADE');
INSERT INTO policies (`policy_type_id`, `policy_title`) values (2, 'OCCUR');
INSERT INTO policies (`policy_type_id`, `policy_title`) values (2, 'DEDUCTIBLE');
INSERT INTO policies (`policy_type_id`, `policy_title`) values (2, 'POLICY');

-- Cargo =  3
INSERT INTO policies (`policy_type_id`, `policy_title`) values (3, 'PER VEHICLE DED');

-- Trailer Interchange =  4
INSERT INTO policies (`policy_type_id`, `policy_title`) values (4, 'PER TRAILER DED');


-- Umbrella = 10
INSERT INTO policies (`policy_type_id`, `policy_title`) values (10, 'UMBRELLA LIAB');
INSERT INTO policies (`policy_type_id`, `policy_title`) values (10, 'OCCUR');
INSERT INTO policies (`policy_type_id`, `policy_title`) values (10, 'EXCESS LIAB');
INSERT INTO policies (`policy_type_id`, `policy_title`) values (10, 'CLAIMS-MADE');
INSERT INTO policies (`policy_type_id`, `policy_title`) values (10, 'DEDUCTIBLE');
INSERT INTO policies (`policy_type_id`, `policy_title`) values (10, 'RETENTION');

-- Employers Liability = 6
INSERT INTO policies (`policy_type_id`, `policy_title`) values (6, 'ANY PROPRIETOR/PARTNER/EXECUTIVE OFFICER/MEMBER EXCLUDED?');
