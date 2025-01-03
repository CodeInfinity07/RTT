-- SQL script to create and populate the 'clubs' table

-- Create the 'clubs' table
CREATE TABLE clubs (
    club_name VARCHAR(255) NOT NULL,
    club_code INT NOT NULL,
    player_ids JSON NULL
);

-- Insert data into the 'clubs' table
INSERT INTO clubs (club_name, club_code, player_ids) VALUES
('AB JUTT BRAND', 4296138, NULL),
('AZAD PANCHI', 1685284, NULL),
('JACK SPARROW', 2407213, NULL),
('MUGHLIYA SULTANAT', 4896396, NULL),
('MEH KHANA', 9234512, NULL),
('KARACHI', 5598834, NULL),
('FRIENDS EMPIRE', 9528317, NULL),
('YAARAM', 1317391, NULL),
('GUJJAR BRAND', 3843652, NULL),
('MALANG GANG', 4595600, NULL),
('CITY OF GOLD', 5301052, NULL),
('HOMIES', 3942285, NULL),
('QUEEN LALA', 4968196, NULL),
('FAQEER LOG', 2184596, NULL),
('WE MATCH', 3718726, NULL),
('SUPER MARKET', 2717670, NULL),
("JUTT DON'T CARE", 1644607, NULL),
('EXODUS', 4404868, NULL),
('NO GO AREA', 7484553, NULL),
('SAMRA', 8874778, NULL),
('REX SQUAD', 7238752, NULL),
('GUJJAR DA DERA', 4302033, NULL),
('PIRATES', 9414779, NULL),
('GANGSTER 05', 1248047, NULL),
('LOYAL SQUAD', 6169049, NULL),
('GROOVESTATION', 6062781, NULL),
('LAHORI DERA', 8592786, NULL),
('PESHAWAR UNI', 9549494, NULL),
('CHILL LIFE', 2571819, NULL),
('VIP FAMILY 412', 2181412, NULL),
('PARDESI LOG', 5265671, NULL),
('BABA DA DERA', 6684622, NULL),
('DEFAULTER JUTT', 2519019, NULL),
('ADMH', 3585451, NULL),
('MALIK DA DERA', 3382864, NULL),
('MZ FIGHTER', 4542588, NULL),
('DIMPLE QUEEN G63', 9615984, NULL),
('PASHTOONS', 9372407, NULL),
('PAGAL KHANA VIP', 8701015, NULL),
('QURBAN', 1127694, NULL),
('DARK MOON', 4713364, NULL),
('YARIYAAN', 1504913, NULL),
('JUTT ON FIRE', 9649546, NULL),
('QALB E WAFA', 5982554, NULL),
('FAB FIVE', 7137822, NULL),
('NIGHT CLUB', 2367815, NULL),
('KARACHI QUEEN', 9971906, NULL),
('NINE ZERO', 7181051, NULL),
('ROMANTIC GOSSIP', 2997475, NULL),
('ENDEAVOURS', 8311768, NULL),
('INFI OF LOVE', 5950037, NULL),
('INSOMNIAC', 3295171, NULL),
('GANGSTER', 8059232, NULL),
('TAYYEB CLUB', 8365158, NULL),
('FUN CLUB', 9022711, NULL),
('KHUMARIYAN', 5112107, NULL),
('JAIL ADYALA', 2702561, NULL),
('LAL HAVELI', 4600666, NULL),
('HAPPY CLUB', 9864926, NULL),
('SOS MINI LONDON', 3142504, NULL),
('NIGAAH E MURSHAD', 2580132, NULL),
('CHAMPIONS', 6081956, NULL),
('JUTT KI KACHERI', 7511871, NULL),
('DECENT FAMILY', 9583114, NULL);