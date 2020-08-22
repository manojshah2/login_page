$(document).ready(function(){
    
    

    var industry=['Accounting / Finance','Advertising / PR / MR / Event Management','Agriculture / Dairy','Animation / Gaming','Architecture / Interior Design','Automobile / Auto Anciliary / Auto Components','Aviation / Aerospace Firms','Banking / Financial Services / Broking','BPO / Call Centre / ITES','Brewery / Distillery','Broadcasting','Ceramics / Sanitary ware','Chemicals / PetroChemical / Plastic / Rubber','Construction / Engineering / Cement / Metals','Consumer Electronics / Appliances / Durables','Courier / Transportation / Freight / Warehousing','Education / Teaching / Training','Electricals / Switchgears','Export / Import','Facility Management','Fertilizers / Pesticides','FMCG / Foods / Beverage','Food Processing','Fresher / Trainee / Entry Level','Gems / Jewellery','Glass / Glassware','Government / Defence','Heat Ventilation / Air Conditioning','Industrial Products / Heavy Machinery','Insurance','Iron and Steel','IT-Hardware & Networking','IT-Software / Software Services','KPO / Research / Analytics','Legal','Media / Entertainment / Internet','Internet / Ecommerce','Leather','Medical / Healthcare / Hospitals','Medical Devices / Equipments','Mining / Quarrying','NGO / Social Services / Regulators / Industry Associations','Office Equipment / Automation','Oil and Gas / Energy / Power / Infrastructure','Pulp and Paper','Pharma / Biotech / Clinical Research','Printing / Packaging','Publishing','Real Estate / Property','Recruitment / Staffing','Retail / Wholesale','Security / Law Enforcement','Semiconductors / Electronics','Shipping / Marine','Strategy / Management Consulting Firms','Sugar','Telecom/ISP','Textiles / Garments / Accessories','Travel / Hotels / Restaurants / Airlines / Railways','Tyres','Water Treatment / Waste Management','Wellness / Fitness / Sports / Beauty','Other'];
    var special_case=['None','Physically-from birth','Physically-Due to accident','Mentally-from birth','Mentally-Due to accident'];
    var source=['','JS','Shaadi.com','BM','LV','A2Z','Sheetal','Other Matrimony alliance','Newspaper','Sulekha'];
    var caste={'Hindu':['24 Manai Telugu Chettiar','96K Kokanastha','Aggarwal','arora','baniya','Brahmin','JAT','Kayastha','Khatri ','Rajput','Ad Dharmi','Adi Andhra','Adi Dravida','Adi Karnataka','Agamudayar','Agri','Ahir','Ahom','Ambalavasi','Amma Kodava','Arakh arakvanshiya','Arekatica','Arunthathiyar','Arya Vysya','Ayyarka','Kshatriya Agnikula','Kachara','Kadava patel','Kahar','Kaibarta','Kaikaala','Kakkalan','Kalal','Kalanji','Kalar','Kalinga Vysya','Kalita','Kalwar','Kamboj','Kamma','Kanakkan Padanna','Kaniyan','Kansari','Kansyakaar','Kapol','Kapu','Karakula Bhaktula','Karana','Karmakar','Karuneegar','Kasar','Kashyap','Katiya','Khandayat','Khandelwal','Kharvi','Kharwar','Khashap Rajpoot','Khatik','Koeri/ Koiri','Kokanastha Maratha','Koli','Koli Mahadev','Kongu Vellala Gounder','Konkani','Koracha','Korama','Kori','Koshti','Krishnavaka','Kshatriya','Kudumbi','Kulalar','Kulita','Kumawat','Kumbhakar','Kumhar/Kumbhar','Kummari','Kunbi','Kurmi','Kurmi kshatriya','Kuruba','Kuruhina shetty','Kurumbar','Kushwaha','Kutchi','Kutchi Gurjar','Kapu Munnuru','Brahmin Anavil','Brahmin Audichya','Badagya','Badhai','Bagdi','Baghel/Gaderiya','Bahi','Baidya','Baishnab','Baishya','Banayat Oriya','Bania','Banik','Banjara','Barai','Balija','Balija Naidu','Brahmin Barendra','Bari','Baria','Barujibi','Beldar','Besta','Bhajantri','Bhandari','Bhatia','Bhatraju','Brahmin Bhatt','Bhavsar','Bhovi/Bhoi','Billava','Bisa Agarwal','Bishnoi/Vishnoi','Bondili','Boyer','Brahmakshatriya','Brahmbatt','Brahmin 6000 Niyogi','Brahmin Bajkhedwal','Brahmin Bardai','Brahmin Bhargava','Brahmin Brahacharanam','Brahmin BrahmBhatt','Brahmin Brajastha Mathil','Brahmin Chittpavan Kokanastha','Brahmin Dadhich','Brahmin Dunua','Brahmin Deshastha','Brahmin Devrukhe','Brahmin Dhiman','Brahmin Embrandiri','Brahmin Dravida','Brahmin Gujar Gaur','Brahmin Gurukkal','Brahmin Jangid','Brahmin Jangra','Brahmin Jogi','Brahmin Jyotish','Brahmin Khadayat','Brahmin Khandelwal','Brahmin Khedaval','Brahmin Malviya','Brahmin Marwari','Brahmin Mevada','Brahmin Paliwal','Brahmin Panicker','Brahmin Rajgor','Brahmin sachora','Brahmin Sanchihar','Brahmin Sarotri','Brahmin Sarua','Brahmin Sikhwal','Brahmin Stanika','Brahmin Tapodhan','Brahmin Vaikhanasa','Brahmin Vaikhawas','Brahmin Vaishnav','Brahmin Valam','Brahmin Velanadu','Brahmin Viswa','Brahmin Yajurvedi','Brahmin Zalora','Brahmo','Buddar','Bunt/Shetty','Brahmin Garhwali','Brahmin Gaur','Brahmin Goswami','Brahmin Gaud Saraswat (GSB)','Brahmin Halua','Brahmin Havyaka','Brahmin Hoysala','Brahmin Iyengar','Brahmin Iyer','Brahmin Jhadua','Brahmin Jhijhotiya','Brahmin Kanyakubj','Brahmin Karhade','Brahmin Kashmiri Pandit','Brahmin Koknastha','Brahmin Kota','Brahmin Kulin','Brahmin Kumaoni','Brahmin Madhwa','Brahmin Maithil','Brahmin Modh','Brahmin Mohyal','Brahmin Nagar','Brahmin Namboodiri','Brahmin narmadiya','Brahmin Panda','Brahmin Pandit','Brahmin Pareek','Brahmin Pushkarna','Brahmin Rarhi','Brahmin Rigvedi','Brahmin Rudraj','Brahmin Sakaldwipi','Brahmin Sanadya','Brahmin Sanketi','Brahmin Saraswat','Brahmin Saryuparin','Brahmin Shivalli','Brahmin Shrimali','Brahmin Smartha','Brahmin Sri Vishnava','Brahmin Tyagi','Brahmin Vaidiki','Brahmin Vyas','Nayee (Barber)','Naagavamsam','Nadar','Nagaralu','Naicker','Naidu','Naik/Nayak/Nayaka','Nair','Nair veluthedathu','Nair Vilakkithala','Namasudra/Namosudra','Nambiar','Namboodiri','Namdev Chhipa','Napit','Nath Jogi','Nepali','Nhavi','Nonia','Chalawadi Holeya','Chamar','Chambhar','Chandravanshi Kahar','Charan','Chasa','Chattada Sri Vaishnava','Chaudary','Chaurasia','Chennadasar','Cheramar','Chettiar','Chhetri','Chippolu Mera','CKP','Coorgi','Dasapalanjika Kannada saineegar','Deshastha Maratha','Devadigas','Devang Koshthi','Devanga','Devendra Kula Vellalar','Devipujak','Dhangar','Dheevara','Dhoba','Dhobi','Dhor/ Dhoar','Dommala','Dumal','Dusadh','Edigas','Ezhava','Ezhuthachan','Gabit','Gangai Ganesh','Ganiga','Garhwali','Gatti','Gavali','Gavandi','Gavara','Ghisadi','Ghumar','Goala','Goan','Gomantak Maratha','Gond/ Gondi/ Raj Gond','Gondhali','Gopal','Goud','Gounder','Gowda','Gramani','Gudia','Gujjar','Gupta','Gurav','Halba Koshti','Hegde','Helava','Jaalari','Jaiswal','Jandara','Jangam','Jatav','Somvanshi Kayastha Prabhu','Sadgope','Saha','Sahu','Saini','Saliya','Sathwara','sawantwadi','Scheduled Caste','Scheduled Tribe','Senai Thalaivar','Senguntha Mudaliyar','Settibalija','Shah','Shimpi','Sindhi','Sindhi Amil','Sindhi Baibhand','Sindhi Bhanusali','Sindhi Bhatia','Sindhi Chhapru','Sindhi Hydrabadi','Sindhi Larai','Sindhi Larkan','Sindhi Larkana','Sindhi Lohana','Sindhi Rohiri','Sindhi Sahiti','Sindhi Sakkhar','Sindhi Sehwani','Sindhi Shikarpuri','Sindhi Thatai','SKP','Somvanshi','Sonar Sunar','Soni','Sood','Sourashtra','Sozhiya Vellalar','Srisayani','SSK','Subarna Banik','Sudi/ Suri/ Sundhi/ Shaundik','Sutar','Swakula sali','Swarnkar','Lambadi','Leva Patidar','Leva Patil','Lingayat','Lodhi Rajput','Lohana','Lohar','Lubana','Madiga','Mahajan','Mahar','Mahendra','Mahindra','Maheshwari','Mahisya','Majabi/Mazhbi','Mala','Mali','Mallah','Manikpuri','Manipuri','Manjhi','Mapila','Maratha','Maravar','Maruthuvar','Marwari','Matang','Mathur','Maurya','Meena','Meenavar','Mehra','Menon','Meru','Meru darji','Modak','Mogaveera','Monchi','Motati Reddy','Mudaliar','Mudaliar Arcot','Mudiraj','Muthuraja','OBC','Oswal','Otari','Others','Padmashali','Pal','Panchal','Panchamsali','Pandaram','Panicker','Parkava Kulam','Pasi','Patel','Patel Dodia','Patel Kadva','Patel Leva','Patel Lodhi','Pathare Prabhu','Patil','Patnaick','Patra','Perika','Pillai','Poosala','Prajapati','Pentecost','R','Rabari','Raigar','Raikwar','Rajaka','Rajbhar','Rajbonshi','Rajpurohit','Rajput Garhwali','Rajput Kumaoni','Rajput Negi','Ramdasia','Ramgarhia','Ramoshi/ Berad/ Bedar','Ravidasia','Rawat','Reddy','Rajput Rohella/Tank','Tamboli','Tanti','Tantuway','Telaga','Teli','Thakkar','Thakur','Thevar/Mukkulathor','Thigala','Thiyya','Tili','Togata','Tonk Kshatriya','Tribe','Turupu Kapu','Uppara','Vadar','Vaddera','Vaidiki Velanadu','Vaish','Vaishnav','Vaishnav Vanik','Vaishnava','Vaishya','Vaishya Vani','Vallala','Valluvar','Valmiki','Vania','Vaniya','Vanjari','Vankar','Vannar','Vannia Kula Kshatriyar','Vanniyar','Variar','Varshney','Veershaiva/Veera Saivam','Velaan','Velama','Velan','Vellalar','Vettuva Gonder ','Vishwakarma','Vokkaliga','Vysya','Wani','Yadav/Yadava','Yellapu'],'Muslim':['Sect','Shia','Caste','Ahle hadith','Ansari','arain','Barelvi','Awan','Barhai','Bohra','Chikwa','Deobandi','Dekkani','Dhunia','dudekula','Ghosi','Hajjam','Hanafi','Jat','Kabaria','idrisi','Khoja','Kumhar','Lebbai','Malik','manihar','Mapila','Maraicar','Mansoori','Memon','Mughal','Pathan','Qureshi','Rajput','Mulla','Sheikh','Syed','Teli','Other','Rayeen','Saifi','Sunni','Jamaat','Ahle Hadees','sufi','Tablighi Jamaat'],'Sikh':['Bhatia','Gursikh','Jat','Kamboj','Kesadhari','Kashyap rajpoot','Khatri'],'Christian':['Anglo Indian','Born Again','Brethren','Catholic','Catholic Knanaya','Catholic -latin','Catholic- malankara','Catholic- Roman','Catholic- syrian','Chaldean','CMS','CSI','evengelical','Indian Orthodox','Jacobite','jacobite-knanaya','Jacobite-syrian','Kharvi','Balija','Balija Naidu','Banayat Oriya','Bania','Banik','Banjara','Bari','Barujibi','Beldar','Besta','Bhajantri','Bhandari','Bhatraju','Bhavsar','Bhovi/Bhoi','Billava','Bisa Agarwal','Bishnoi/Vishnoi','Boyer','Brahmbatt','Brahmin','Brahmin 6000 Niyogi','Brahmin Anavil','Brahmin Andhra','Brahmin Audichya','Brahmin Bajkhedwal','Brahmin Bardai','Brahmin Barendra','Brahmin Bengali','Brahmin Bhargava','Brahmin Bhatt','Brahmin Bhumihar','Brahmin Brahacharanam','Brahmin BrahmBhatt','Brahmin Brajastha Mathil','Brahmin Chittpavan Kokanastha','Brahmin Dadhich','Brahmin Daivadnya','Brahmin Deshastha','Brahmin Devrukhe','Brahmin Dhiman','Brahmin Dravida','Brahmin Dunua','Brahmin Embrandiri','Brahmin Garhwali','Brahmin Gaud Saraswat (GSB)','Brahmin Gaur','Brahmin Goswami','Brahmin Gujar Gaur','Brahmin Gujrati','Brahmin Gurukkal','Brahmin Halua','Brahmin Havyaka','Brahmin Hoysala','Brahmin Iyengar','Brahmin Iyer','Brahmin Jangid','Brahmin Jangra','Brahmin Jhadua','Brahmin Jhijhotiya','Brahmin Jogi','Brahmin Jyotish','Brahmin Kannada','Brahmin Kanyakubj','Brahmin Karhade','Brahmin Karnataka','Brahmin Kashmiri Pandit','Brahmin Khadayat','Brahmin Khandelwal','Brahmin Khedaval','Brahmin Koknastha','Brahmin Kota','Brahmin Kulin','Brahmin Kumaoni','Brahmin Madhwa','Brahmin Maharastra','Brahmin Maithil','Brahmin Malviya','Brahmin Marwari','Brahmin Mevada','Brahmin Modh','Brahmin Mohyal','Brahmin Nagar','Brahmin Namboodiri','Brahmin Narmadiya','Brahmin Paliwal','Brahmin Panda','Brahmin Pandit','Brahmin Panicker','Brahmin Pareek','Brahmin Pushkarna','Brahmin Rajasthani','Brahmin Rajgor','Brahmin Rarhi','Brahmin Rigvedi','Brahmin Rudraj','Brahmin Sakaldwipi','Brahmin Sanadya','Brahmin Sanketi','Brahmin Saraswat','Brahmin Sarotri','Brahmin Sarua','Brahmin Saryuparin','Brahmin Shivalli','Brahmin Shrimali','Brahmin Sikhwal','Brahmin Smartha','Brahmin Sri Vishnava','Brahmin Stanika','Brahmin Tapodhan','Brahmin Tyagi','Brahmin Utkal','Brahmin Vaidiki','Brahmin Vaikhawas','Brahmin Vaishnav','Brahmin Valam','Brahmin Velanadu','Brahmin Viswa','Brahmin Vyas','Brahmin Yajurvedi','Brahmin Zalora','Brahmo','Buddhist','Bunt/Shetty','Catholic - Knanaya','Catholic - Latin','Catholic - Malankara','Catholic - Roman','Catholic - Syrian','Chamar','Chambhar','Chandravanshi Kahar','Chasa','Chattada Sri Vaishnava','Chaudary','Chaurasia','Chettiar','Chhetri','CKP','Community/Caste','Coorgi','Deshastha Maratha','Devadigas','Devang Koshthi','Devanga','Devendra Kula Vellalar','Dhangar','Dheevara','Dhoba','Dhobi','Dhor/ Dhoar','Digamber','Dusadh'],'Jain':['Digamber','Others','Shwetamber']};
    var state={'India':['New Delhi','Abohar','Achalpur','Adilabad','Adityapur','Adoni','Agartala','Agra','Ahmedabad','Ahmednagar','Aizwal','Ajmer','Akbarpur/ Mati','Akola','Alandurai','Alappuzha','Alibag','Aligarh','Alipore','Alipurduar','Allahabad','Alleppey','Almora','Alwar','Ambala','Ambala Sadar','Ambattur','Ambedkar nagar','Ambernath','Ambikapur','Ambur','Amethi','Amingaon','Amravati','Amravati (Maharashtra)','Amreli','Amritsar','Amroha','Anand','Anantapur','Anantnag','Angul','Ankleshwar','Ankola','Araria','Arcot','Arrah','Asansol','Ashokenagar Kalyangarh','Auraiya','Aurangabad','Aurangabad (Bihar)','Avadi','Ayodhya','Azamgarh','Badalapur','Baddi','Bagaha','Bagalkot','Baghpat','Bahadurgarh','Baharampur','Bahraich','Baidyabati','Balaghat','Balangir','Baleshwar Town','Baleshwar/ Balasore','Ballia','Bally','Balotra','Balrampur','Balurghat','Banda','Banda','Banka','Bankura','Bansberia','Banswara','Barabanki','Baramula','Baran','Baranagar','Barasat','Baraut','Barbil','Barddhaman/ Burdwan','Bareilly','Bargarh','Baripada','Baripada Town','Barmer','Barnala','Baroda/Vadodara','Barpeta','Barrackpore','Barshi','Barwani','Basirhat','Basti','Batala','Bathinda','Beawar','Beed','Begusarai','Behrampur','Belgaum/ Belagavi','Bellary','Bemetara','Bettiah','Betul','Bhabua','Bhadrak','Bhadravati','Bhadreswar','Bhagalpur','Bhandara','Bharatpur','Bharuch','Bhatapara','Bhatpara','Bhavnagar','Bhawanipatna','Bhayander','Bhilai','Bhilwara','Bhimavaram','Bhind','Bhiwadi','Bhiwandi','Bhiwani','Bhopal','Bhubaneshwar','Bhuj','Bhusawal','Bidar','Bidhan Nagar','Bihar Sharif','Bijapur','Bijnor','Bikaner','Bikapur','Bilaspur','Bokaro','Bongaigaon','Bongaon','Botad','Brahmapur','Brajarajnagar','Budaun','Bulandshahar','Bulandshahr','Buldhana','Bundi','Burhanpur','Burnpur','Buxar','Cannanore','Chaibasa','Chamarajanagar','Chamba','Champdani','Champhai','Chandan Nagar','Chandauli','Chandausi','Chandigarh','Chandrapur','Chapra','Chass','Chatra','Cherthala','Chhatrapur','Chhattarpur','Chhindwara','Chhota Udaipur','Chidambaram','Chikkaballapur','Chikmagalur','Chilakaluripet','Chinglepet','Chinsurah','Chitradurga','Chittoor','Chittorgarh','Choudwar','Churu','Cochin/ Kochi/ Ernakulam','Coimbatore','Coochbehar','Cuddalore','Cuddapah','Cuttack','Dabgram','Dadara','Dahod','Dalhousie','Dalli-Rajhara','Daltonganj','Daman','Damoh','Darbhanga','Darjeeling','Datia','Dausa','Davangere','Deesa','Dehradun','Dehri','Deoghar','Deora','Deoria','Dewas','Dhamtari','Dhanbad','Dhar','Dharmapuri','Dharmavaram','Dharmsala','Dharwad','Dhenkanal','Dholpur','Dhoraji','Dhubri','Dhule','Dhuri','Dibrugarh','Dimapur','Dinapur Nizamat','Dindigul','Diphu','Dispur','Diu','Dum Dum','Dumka','Dungarpur','Durg','Durgapur','Dwarka','Edathala','Eluru','English Bazar','Erode','Etah','Etawah','Faizabad','Faridabad','Faridkot','Farrukhabad','Fatehabad','Fatehgarh','Fatehpur','Fazilka','Firozabad','Firozpur','Gadag-betgeri','Gadchiroli','Gandhidham','Gandhinagar','Ganganagar','Gangapur City','Gangawati','Gangtok','Garhwa','Gaya','Ghaziabad','Ghazipur','Giridih','Goalpara','Godda','Godhra','Golaghat','Gonda','Gondal','Gondiya','Gopalganj','Gorakhpur','Greater Noida','Gudivada','Gulbarga','Gulmarg','Gumla','Guna','Guntakal','Guntur','Gurdaspur','Gurgaon','Guwahati','Gwalior','Gyanpur','Habra','Hajipur','Haldia','Haldwani','Halisahar','Hamirpur','Hansi','Hanumangarh','Haora','Hapur','Hardoi','Haridwar','Hassan','Hathras','Haveri','Hazaribagh','Himatnagar','Hindaun','Hindupur','Hinganghat','Hingoli','Hissar','Hoshangabad','Hoshiarpur','Hospet','Hosur','Howrah','Hubli','Hugli-Chinsurah','Ichalakaranji','Imphal','Indore','Itanagar','Ittarsi','Jabalpur','Jagadhari','Jagatsinghpur','Jagdalpur','Jagraon','Jaipur','Jaisalmer','Jalandhar','Jalgaon','Jalna','Jalore','Jalpaiguri','Jamalpur','Jamkhandi','Jammu','Jamnagar','Jamshedpur','Jamtara','Jamui','Jamuria','Jatni','Jaunpur','Jawai','Jehanabad','Jetpur Navagadh','Jeypur','Jhabua','Jhajjar','Jhalawar','Jhansi','Jhargram','Jharia','Jharsugda','Jhumri Talaiya','Jhunjhunu','Jind','Jodhpur','Jorhat','Junagarh','Kadapa','Kaimur','Kaithal','Kakching','Kakinada','Kakkanad','Kalaburagi','Kalimpong','Kalol','Kalpakkam','Kalyan','Kalyani','Kamarhati','Kanchipuram','Kanchrapara','Kandla','Kangra','Kanhangad','Kannauj','Kanniyakumari','Kannur','Kanpur','Kanyakumari','Kapurthala','Karaikkudi','Karauli','Karimganj','Karimnagar','Karnal','Karur','Karwar','Kasaragod','Kasauli','Kasganj','Kashipur','Kathua','Katihar','Katni','Kavaratti','Kayamkulam','Kendrapara','Kendujhar','Khagaria','Khajuraho','Khalilabad','Khambhalia','Khambhat','Khammam','Khandwa','Khanna','Kharagpur','Khardaha','Khargone','Khora','Khordha','Khurja','Kicha','Kishanganj','Kishangarh','Kodaikanal','Kohima','Kolar','Kolhapur','Kollam','Koppal','Koraput','Korba','Kot Kapura','Kota','Kothagudem','Kottayam','Kovalam','Kozhikhode/ Calicut','Krishnagiri','Krishnanagar','Krishnarajapura','Kullu','Kulti','Kumbakonam','Kurichi','Kurnool','Kurukshetra','Kushinagar','Lakhimpur Kheri','Lakhisarai','Lalitpur','Latur','Leh','Lilong (Thoubal)','Loni','Lucknow','Ludhiana','Lunglei','Machilipatnam','Madanapalle','Madavaram','Madhepura','Madhubani','Madhyamgram','Madikeri','Madurai','Madural Ellisnaga','Mahabalipuram','Mahabubabad','Mahadevapura','Maharajganj','Mahasamund','Mahbubnagar','Mahendragarh','Mahesana','Maheshtala','Mainpuri','Makrana','Malappuram','Malda','Malegaon','Malerkotla','Malkajgiri','Malout','Mandi','Mandi Dabwali','Mandigovindgarh','Mandla','Mandsaur','Mandya','Mangalore/ Mangaluru','Mango','Manjeri','Manjhanpur','Mansa','Mapusa','Margaon','Mathura','Maunath Bhanjan','Mawkyrwat','Mawlai','Meerut','Mhow','Midnapore','Miryalaguda','Mirzapur','Mirzapur/Vindhyachal','Modasa','Modi Nagar','Moga','Mohali','Mokokchung','Moradabad','Morena','Morvi','Motihari','Mughalsarai','Muktsar','Munger','Murwara','Mussoorie','Muzaffarnagar','Muzaffarpur','Mysore/ Mysuru','Nabadwip','Nabarangpur','Nabha','Nadiad','Nagaon','Nagapattinam','Nagda','Nagercoil','Nagore','Nagpur','Nahan','Naharlagun','Naihati','Naila Janjgir','Nainital','Nalgonda','Namakkal','Nanded','Nandurbar','Nandyal','Narasaraopet','Narnaul','Narsinghpur','Narwana','Nashik/ Nasik','Naugarh','Navi Mumbai','Navi Mumbai Panvel Raigad','Navsari','Nawada','Nawagoan','Neemuch','Nellore','Neyveli','Nilgiri','Nizamabad','Noida','Nongpoh','Nongstoin','North Barrackpur','North Dum Dum','North Lakhimpur','Nuh','Ongole','Ooty','Orai','Osmanabad','Others','Ozhukarai','Padrauna','Painavu','Palakkad','Palampet','Palanpur','Palghat','Pali','Pallavaram','Palwal','Panaji','Panchkula','Pandalam','Panihati','Panikoili','Panipat','Panna','Panvel','Paradeep','Paralakhemundi','Parbhani','Parlakhemundi','Pasighat','Patan','Patan (Chattisgarh)','Pathanamthitta','Pathankot','Patiala','Patna','Payyannur','Perambalur','Periyar','Phagawara','Pilibhit','Pithampur','Pithoragarh','Ponnani','Ponta Sahib','Porbandar','Port Blair','Pratapgarh','Proddatur','Puducherry','Pudukkottai','Puri','Purnia','Puruliya','Quilandy','Quilon','Rae Bareli','Raichur','Raiganj','Raigarh','Raipur','Raisen','Rajagangpur','Rajahmundry','Rajapalayam','Rajarhat Gopalpur','Rajgarh','Rajkot','Rajnandgaon','Rajpipla','Rajpur Sonarpur','Rajpura','Rajsamand','Ramagundam','Ramanagara','Ramanathapuram','Rameswaram','Ramgarh Cantonment','Ramnagar','Rampur','Ranchi','Rangareddy','Ranibennur','Raniganj','Ratangarh','Ratlam','Ratnagiri','Raurkela Industrial Township','Rayagada','Rewa','Rewari','Rishikesh','Rishra','Robertsganj','Robertson Pet','Rohtak','Roorkee','Ropar/ Rupnagar/ Roopnagar','Rourkela','Rudrapur','Rudrapur (Uttarakhand)','Sagar','Saharanpur','Saharsa','Sahibabad','Sahibganj','Sahibzada Ajit Singh Nagar (SAS)','Salem','Samana','Samastipur','Sambalpur','Sambalpur Town','Sambhal','Sangareddy','Sangli','Sangli Miraj Kupwad','Sangrur','Santipur','Sardarshahar','Sasaram','Satara','Satna','Sawai Madhopur','Sehore','Seoni','Seraikela','Serampore','Shahdol','Shahjahanpur','Shajapur','Shamli','Shikohabad','Shillong','Shimla','Shimoga/ Shivamogga','Shirdi','Shivapuri','Shravasti','Sibsagar','Sidhi','Sikar','Silchar','Siliguri','Sindhudurg','Sindri','Singrauli','Sirhind -Fategarh','Sirohi','Sirsa','Sitamarhi','Sitapur','Sivaganga','Sivakasi','Siwan','Solan','Solapur','Sonbhadra','Sonbhadra','Sonepat','South Dum Dum','Sri Ganga Nagar','Srikakulam','Srinagar','Sujangarh','Sultanpur','Sunabeda','Sunam','Sundargarh','Sundernagar','Supaul','Surat','Surendranagar','Suri','Suryapet','Tadepalligudem','Tadpatri','Taliparamba','Tambaram','Tamluk','Tarn Taran Sahib','Tehri','Tenali','Tezpur','Thalassery','Thane','Thanesar','Thanjavur','Theni','Thiruvananthapuram','Thiruvetriyur','Thoothukudi/ Tuticorin','Thoubal','Thrissur','Tikamgarh','Tinsukia','Tiruchirappalli','Tirunelveli','Tirupati','Tiruppur','Tiruvallur','Tiruvannamalai','Tiruvarur','Tiruvottiyur','Titagarh','Tohana','Tonk','Tuensang','Tumkur/Tumakuru','Tura','Tuticorin','Udaipur','Udgir','Udham Singh Nagar','Udhampur','Udupi','Ujjain','Ulhasnagar','Uluberia','Una','Unnao','Uttarpara Kotrung','Vadakara','Valparai','Valsad','Vapi','Varanasi','Vasai Virar City','Vejalpur','Vellore','Veraval','Vidarbha','Vidisha','Vijayapura','Vijaywada','Viluppuram','Virudhunagar','Vishwanathapura','Vizag/ Vishakapatnam','Vizianagaram','Waidhan','Warangal','Wardha','Washim','Wokha','Yadgir','Yamunanagar','Yavatmal','Zunheboto']};
    var religion=['Muslim','Hindu','Sikh','Buddhist','Christian','Jain','Other','Parsi','Jewish','Bahai'];
    var mother_tongue=['Hindi-Delhi','Hindi-UP','Punjabi','Hindi-MP/CG','Hindi- Bihar/Jharkhand','Hindi-Rajasthan','Haryanvi','Himachali','Kashmiri','Sindhi','Urdu','Marathi','Gujrati','Kutchi','Hindi-MP/CG','Konkani','Sindhi','Tamil','Telgu','Kannada','Malayalam','Tulu','Udu','Bengali','Oriya','assamese','Sikkim/Nepali','English'];
    var complexion=['Fair','Wheatish','Dark','Very Fair'];
    var body_type=['Athletic','Slim','Average','Heavy'];
    var have_children=['None','Yes-Living Seperately','Yes-Staying together'];
    var manglik=['Manglik','Angshik','Non-manglik','Don’t know'];
    var employed_in=['Private Sector','Government/Public Sector','Civil Services','Defense','Business/Self Employed','Not working'];
    var employed_as=['Software Professional','Hotels / Hospitality Professional','Non – IT Engineer','Sales Professional','Banking Professional','Govt. - Product manager','Govt. - Doctor','Electronics Engineer','Chartered Accountant','Cyber / Network Security','Business - Lawyer & Legal Professional','Analyst','Sr. Manager /  Manager','Project Manager - IT','Project Lead - IT','Corporate Planning','Hardware / Telecom Engineer','Marketing Professional','Business - Business Owner /  Entrepreneur','Defence - Air Force','Subject Matter Expert','Business - Hotels / Hospitality Professional','Quality Assurance Engineer - IT','Others','Business - Others','Research Professional','Govt. - Security Professional','Project Manager - Non IT','Scientist','Operations Management','Govt. - Professor / Lecturer','Govt. - Operator / Technician','Accounting Professional','Consultant','Govt. - Software Professional','Medical /  Healthcare Professional','Business - Businessperson','Operator / Technician','Govt. - Airline Professional','Govt. - Law Enforcement Officer','Advertising Professional','Auditor','Architect','Doctor','Govt. - Research Professional','HR Professional','Quality Assurance Engineer','Govt. - Scientist','Govt. - Research Assistant','Education Professional','Research Assistant','Business - Interior Designer','Admin Professional','Govt. - Corporate Planning','Govt. - Education Professional','Student','Govt. - Non – IT Engineer','Business - Advertising Professional','Govt. - Project Manager - IT','UI / UX designer','Professor / Lecturer','Flight Attendant','Govt. - Consultant','Film /  Entertainment Professional','Lawyer & Legal Professional','Program Manager','Web / Graphic Designer','Finance Professional','Pilot','Govt. - Operations Management','Science Professional','Business - Broker','Product manager','Airline Professional','Security Professional','Media Professional','Pharmacist','Govt.','Business - CxO /  Chairman /  President /  Director','Govt. - Banking Professional','Customer Service','Business - Agriculture Professional','Not working','Govt. - Quality Assurance Engineer','CxO /  Chairman /  President /  Director','Govt. - Dentist','Govt. - Others','Business - Travel Professional','Business','Business - Social Services /  NGO /  Volunteer','Govt. - BPO / ITes Professional','Defence - Defence Services','Looking for job','VP /  AVP /  GM /  DGM','Govt. - Project Lead - IT','Nurse','Govt. - Analyst','Defence - Navy','Farming','Teacher','Govt. - Finance Professional','Govt. - Medical /  Healthcare Professional','BPO / ITes Professional','Physiotherapist','Govt. - Admin Professional','Agent','Govt. - Lawyer & Legal Professional','Govt. - Clerk','Business - Subject Matter Expert','Singer','Corporate Communication','Business - Media Professional','Govt. - Media Professional','Govt. - Accounting Professional','Business - Physiotherapist','Govt. - HR Professional','Merchant Naval Officer','Civil Services (IAS/ IPS/ IRS/ IES/ IFS)','Business - Education Professional','Defence - Law Enforcement Officer','Govt. - Hotels / Hospitality Professional','Interior Designer','Govt. - Sales Professional','Govt. - Physiotherapist','Govt. - Corporate Communication','Govt. - Customer Service','Business - Research Professional','Agriculture Professional','Paramedic','Actor / Model','Business - Doctor','Defence - Operator / Technician','Business - Educational Institution Owner','Clerk','Govt. - Hardware / Telecom Engineer','Govt. - Cyber / Network Security','Social Services /  NGO /  Volunteer','Govt. - Architect','Defence - Cyber / Network Security','Business - Chartered Accountant','Govt. - Nurse','Govt. - Surgeon','Travel Professional','Artist','Business - Architect','Govt. - Electronics Engineer','Govt. - Police','Business - Sportsperson','Dentist','Defence - Army','Govt. - Quality Assurance Engineer - IT','Business - Paramedic','Business - Nurse','Fashion Designer','Govt. - Agriculture Professional','Business - Actor / Model','Business - Farming','Mariner','Fitness Professional','Secretary / Front Office','Business - Writer','Defence - Quality Assurance Engineer','Govt. - Secretary / Front Office','Business - Artist','Business - Agent','Govt. - Science Professional','Journalist','Business - Teacher','Govt. - Sr. Manager /  Manager','PR Professional','Defence - Teacher','Business - Professor / Lecturer','Business - Film /  Entertainment Professional','Broker','Govt. - Marketing Professional','Govt. - Flight Attendant','Defence - Clerk','Retired','Animator','Govt. - Project Manager - Non IT','Educational Institution Owner','Govt. - Film /  Entertainment Professional','Defence - Electronics Engineer','Business - Surgeon','Beautician','Business - VP /  AVP /  GM /  DGM','Govt. - Auditor','Govt. - Program Manager','Govt. - Paramedic','Govt. - Teacher','Sportsperson','Writer','Govt. - PR Professional','Defence - Admin Professional','Govt. - Pharmacist','Defence - Paramedic','Surgeon','Business - Singer','Business - Medical /  Healthcare Professional','Govt. - Advertising Professional','Govt. - Mariner','Defence - Pilot','Defence - Mariner','Govt. - CxO /  Chairman /  President /  Director','Business - Dentist','Defence - Non – IT Engineer','Business - Beautician','Business - Psychologist','Govt. - VP /  AVP /  GM /  DGM','Librarian','Business - Science Professional','Govt. - Merchant Naval Officer','Govt. - Chartered Accountant','Govt. - Pilot','Business - Scientist','Psychologist','Defence - Doctor','Business - Research Assistant','Govt. - Animator','Business - Fashion Designer','Business - Pharmacist','Govt. - Politician','Business - Animator','Business - Fitness Professional','Businessperson','Business - Veterinary Doctor','Govt. - Veterinary Doctor','Govt. - Psychologist','Govt. - Interior Designer','Govt. - Subject Matter Expert','Defence - Software Professional','Govt. - Social Services /  NGO /  Volunteer','Defence - Scientist'];
    var age=['18','19','20','21','22','23','24','25','26','27','28','29','30','31','32','33','34','35','36','37','38','39','40','41','42','43','44','45','46','47','48','49','50','51','52','53','54','55','56','57','58','59','60','61','62','63','64','65','66','67','68','69','70'];
    var height_ft=['4','5','6'];
    var height_in=['1','2','3','4','5','6','7','8','9','10','11'];
    var height=['4\' 0" (1.22mts)','4\' 1" (1.24mts)','4\' 2" (1.28mts)','4\' 3" (1.31mts)','4\' 4" (1.34mts)','4\' 5" (1.35mts)','4\' 6" (1.37mts)','4\' 7" (1.40mts)','4\' 8" (1.42mts)','4\' 9" (1.45mts)','4\' 10" (1.47mts)','4\' 11" (1.50mts)','5\' 0" (1.52mts)','5\' 1" (1.55mts)','5\' 2" (1.58mts)','5\' 3" (1.60mts)','5\' 4" (1.63mts)','5\' 5" (1.65mts)','5\' 6" (1.68mts)','5\' 7" (1.70mts)','5\' 8" (1.73mts)','5\' 9" (1.75mts)','5\' 10" (1.78mts)','5\' 11" (1.80mts)','6\' 0" (1.83mts)','6\' 1" (1.85mts)','6\' 2" (1.88mts)','6\' 3" (1.91mts)','6\' 4" (1.93mts)','6\' 5" (1.96mts)','6\' 6" (1.98mts)','6\' 7" (2.01mts)','6\' 8" (2.03mts)','6\' 9" (2.06mts)','6\' 10" (2.08mts)','6\' 11" (2.11mts)','7\'  (2.13mts)plus'];
    var income_bracket=['Rs. 0','Rs.1 Lakh','Rs.2 Lakh','Rs.3 Lakh','Rs.4 Lakh','Rs.5 Lakh','Rs.7.5 Lakh','Rs.10 Lakh','Rs.15 Lakh','Rs.20 Lakh','Rs.25 Lakh','Rs.35 Lakh','Rs.50 Lakh','Rs.70 Lakh','Rs.1 Crore','Rs.5 Crore','Rs.10 Crore','Rs.50 Crore','Rs.100 Crore','Rs.500 Crore','Rs.1000 Crore','Rs.1000+ Crore'];
    var gender=['Male','Female'];
    var marital_status=['Never Married','Divorced','Annulled','Widowed','Awaiting Divorce','Married'];
    var occupation=['','Accounting Professional','Actor/Model','Admin Professional','Advertising Professional','Agent','Agriculture Professional','Air Force','Airline Professional','Analyst','Animator','Architect','Army','Artist','Auditor','Banking Professional','Beautician','BPO/ITes Professional','Broker','Business Owner/ Entrepreneur','Business/ Self Employed','Businessperson','Chartered Accountant','Civil Services','Civil Services (IAS/ IPS/ IRS/ IES/ IFS)','Clerk','Consultant','Corporate Communication','Corporate Planning','Customer Service','CxO/ Chairman/ President/ Director','Cyber/Network Security','Defence','Defence Services','Dentist','Doctor','Education Professional','Educational Institution Owner','Electronics Engineer','Farming','Fashion Designer','Film/ Entertainment Professional','Finance Professional','Fitness Professional','Flight Attendant','Government/Public Sector','Hardware/Telecom Engineer','Hotels/Hospitality Professional','HR Professional','Interior Designer','Journalist','Law Enforcement Officer','Lawyer &amp; Legal Professional','Librarian','Looking for job','Mariner','Marketing Professional','Media Professional','Medical/ Healthcare Professional','Merchant Naval Officer','Navy','Non – IT Engineer','Not Working','Not working','Nurse','Operations Management','Operator/Technician','Others','Paramedic','Pharmacist','Physiotherapist','Pilot','Police','Politician','PR Professional','Product manager','Professor/Lecturer','Program Manager','Project Lead - IT','Project Manager - IT','Project Manager - Non IT','Psychologist','Quality Assurance Engineer','Quality Assurance Engineer - IT','Research Assistant','Research Professional','Retired','Sales Professional','Science Professional','Scientist','Secretary/Front Office','Security Professional','Singer','Social Services/ NGO/ Volunteer','Software Professional','Sportsperson','Sr. Manager/ Manager','Student','Subject Matter Expert','Surgeon','Teacher','Travel Professional','UI/UX designer','Veterinary Doctor','VP/ AVP/ GM/ DGM','Web/Graphic Designer','Writer'];
    var country=['Afghanistan','Albania','Algeria','American Samoa','Andorra','Angola','Anguilla','Antigua and Barbuda','Argentina','Armenia','Australia','Austria','Azerbaijan','Bahamas','Bahrain','Bangladesh','Barbados','Belarus','Belgium','Belize','Benin','Bermuda','Bhutan','Bolivia','Bosnia and Herzegovina','Botswana','Brazil','British Virgin Islands','Brunei','Bulgaria','Burkina Faso','Burundi','Cambodia','Cameroon','Canada','Canary Islands','Cape Verde','Cayman Islands','Central African Republic','Chad','Chile','China','Colombia','Comoros','Congo','Cook Islands','Costa Rica','Cote dIvoire','Croatia','Cuba','Cyprus','Czech Republic','Denmark','Dominica','Dominican Republic','East Timor','Ecuador','Egypt','El Salvador','Equatorial Guinea','Eritrea','Estonia','Ethiopia','Faeroe Islands','Falkland Islands (Islas Malvinas)','Fiji','Finland','France','French Guiana','French Polynesia','Gambia','Georgia','Germany','Ghana','Gibraltar','Greece','Greenland','Grenada','Guadeloupe','Guam','Guatemala','Guinea','Guinea-Bissau','Guyana','Haiti','Holland','Honduras','Hong Kong','Hungary','Iceland','India','Indonesia','Iran','Iraq','Ireland','Isle of Man','Israel','Italy','Jamaica','Japan','Jordan','Kazakhstan','Kenya','Kiribati','Kuwait','Kyrgyzstan','Laos','Latvia','Lebanon','Lesotho','Liberia','Libya','Liechtenstein','Lithuania','Luxembourg','Macau','Macedonia','Madagascar','Malawi','Malaysia','Maldives','Mali','Malta','Martinique','Mauritius','Mexico','Moldova','Monaco','Mongolia','Montenegro','Montserrat','Morocco','Mozambique','Myanmar','Namibia','Nepal','Netherlands','Netherlands Antilles','New Caledonia','New Zealand','Nicaragua','Niger','Nigeria','North Korea','Norway','Oman','Others','Pakistan','Panama','Papua New Guinea','Paraguay','Peru','Philippines','Poland','Portugal','Puerto Rico','Qatar','Reunion','Romania','Russia','Rwanda','Saint Kitts and Nevis','Saint Lucia','Saint Vincent and the Grenadines','San Marino','Sao Tome and Principe','Saudi Arabia','Senegal','Serbia','Seychelles','Sierra Leone','Singapore','Slovakia','Slovenia','Solomon Islands','Somalia','South Africa','South Korea','Spain','Sri Lanka','Sudan','Suriname','Swaziland','Sweden','Switzerland','Syrian Arab Republic','Tahiti','Taiwan','Tajikistan','Tanzania','Thailand','Togo','Trinidad and Tobago','Tunisia','Turkey','Turkmenistan','Turks and Caicos Islands','Uganda','Ukraine','United Arab Emirates','United Kingdom','United States','United States Virgin Islands','Uruguay','Uzbekistan','Vanuatu','Vatican City State','Venezuela','Vietnam','Wallis and Futuna','Yemen','Yugoslavia','Zambia','Zimbabwe'];
    var residential_status=['','Citizen','Permanent Resident','Work Permit','Student Visa','Temporary Visa'];
    var ug=['B.A','B.Arch','B.Com','B.Des','B.E/B.Tech','B.Ed','B.IT','B.Pharma','B.Sc','BAMS','BBA','BCA','BDS','BFA','BHM','BHMS','BJMC','BL/LLB','BPT','BVSc.','MBBS','Other'];
    var pg=['CA','M.A','M.Arch','M.Com','M.Des','M.E/M.Tech','M.Ed','M.Pharma','M.Phil','M.S (Medicine)','M.S Engineering','M.Sc','MBA/PGDM','MCA/PGDCA','MCh','MD','MDS','MFA','MJMC','ML/LLM','MPT','MSW','MVSc.','Ph.D'];
    var occupation1=['Service -Private','Service- Government /PSU','Civil Services','Army/Armed Forces','Business/Self Employed','Retired','Expired','Housewife'];
    var family_value=['Liberal','Moderate','Orthodox','Conservative'];
    var family_type=['Joint Family','Nuclear family','Others'];
    var affluence_level=['Affluence Level','Upper Middle','Not filled in','Rich/Affluent','Middle Class'];
    var children_option=['None','1','2','3','3+'];
    var horoscope=['Must','Not Necessary'];
    var verified=['Yes','No','Not provided'];
    var proof=['Given','Not Given'];
    var food_habits=['Eggetarian','Jain','Non-Veg','Vegetarian','Fishetarian'];
    var smoke=["Doesn't smoke","Smokes","Smokes occasionally"];
    var drink=['Drinks occasionally',"Doesn't drink","Drinks"];
    var hair_type=['Bald','Semi- Bald','Normal Hair','Good Hair'];
    var looks=['Extraordinary','Classy','Average','Below Average'];
    var specs=['Wear Specs','Normal Eyesight','Wear Lenses'];
    var communication=['Classy','Good','Average','Normal','Bad'];
    var calling_for=['Lead','Sample Profile Status','Profile Shared','Meeting Confirmation','Lead Payment'];
    var calling_status=['Pending','Follow Up','Profile Rejected','Don’TCall','Accepted','Wrong Number','Already Married'];
    var lead_status=['Pending','Paid Client','Rejected','Follow Up','Post Sample Will Decide','Pay When You Marry','Pay On Meeting'];
    var rec_option=['Yes','No','Would Share Soon'];
    var meeting_type=['Telephonic','Face To Face','Video Call'];
    var meeting_status=['Done','Postponed','Rejected','Follow Up'];
    var rejection_reason=['Looks','Personality','Financial','Family Type','Other Criteria','Religion And Caste','Family Values'];
    var client_type=['Lead','Paid','Meeting','PostMeeting-WillDecide','Post Sample Will Decide','Rejected Completely','Pay At Roka'];
    var duration=['1 Month','3 Month','6 Month','1 Year','Till You Marrry'];
    var package_type=['Luv2Register-3Month','Luv2Register-6Months','TillYourRoka','Luv2Meet','PayAtYourRoka'];
    var age_bracket=['18','19','20','21','22','23','24','25','26','27','28','29','30','31','32','33','34','35','36','37','38','39','40','41','42','43','44','45','46','47','48','49','50','51','52','53','54','55','56','57','58','59','60','61','62','63','64','65','66','67','68','69','70'];
    var residential_type=['Flat/Apartment','Bunglow/Villa/penthouse','Farmhouse','Independent house','Builder floor','Rented Property'];
    var willing_to_stay=['With parents','Independently'];
    var pp_partner_occupation=['Working','Non working','Her choice','Expecting partner income'];
    var yes_no=['Yes','No'];

    
    $('#from_premium_institute').tagator({autocomplete: yes_no,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#open_for_outside_india').tagator({autocomplete: yes_no,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#open_for_divorcee').tagator({autocomplete: yes_no,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#pp_partner_occupation').tagator({autocomplete: pp_partner_occupation,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#willing_to_stay').tagator({autocomplete: willing_to_stay,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#residential_type').tagator({autocomplete: residential_type,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#annual_income1').tagator({autocomplete: income_bracket,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#annual_income2').tagator({autocomplete: income_bracket,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#pp_income').tagator({autocomplete: income_bracket,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#pp_income2').tagator({autocomplete: income_bracket,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#family_income').tagator({autocomplete: income_bracket,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#family_income2').tagator({autocomplete: income_bracket,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#wedding_budget').tagator({autocomplete: income_bracket,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#wedding_budget2').tagator({autocomplete: income_bracket,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#net_worth').tagator({autocomplete: income_bracket,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#height').tagator({autocomplete: height,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#pp_min_height').tagator({autocomplete: height,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#pp_max_height').tagator({autocomplete: height,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#pp_fromage').tagator({autocomplete: age_bracket,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#pp_toage').tagator({autocomplete: age_bracket,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#pp_religion').tagator({autocomplete: religion,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:-1});
    
    $('#pp_country').tagator({autocomplete: country,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:-1});
    $('#pp_state').tagator({autocomplete: state["India"],useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:-1});
    $('#pp_marital_status').tagator({autocomplete: marital_status,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:-1});
    $('#pp_education_qualification').tagator({autocomplete: ug,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:-1});
    $('#pp_employed_as').tagator({autocomplete: employed_as,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:-1});
    $('#pp_smoker').tagator({autocomplete: smoke,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:-1});
    $('#pp_drinker').tagator({autocomplete: drink,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:-1});
    $('#pp_food_habits').tagator({autocomplete: food_habits,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:-1});
    $('#pp_manglik').tagator({autocomplete: manglik,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:-1});
    $('#pp_mother_tongue').tagator({autocomplete: mother_tongue,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:-1});
    $('#pp_complexion').tagator({autocomplete: complexion,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:-1});
    $('#pp_body_type').tagator({autocomplete: body_type,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:-1});
    $('#pp_have_children').tagator({autocomplete: have_children,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:-1});
    $('#pp_challenged').tagator({autocomplete: special_case,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:-1});


    $('#source').tagator({autocomplete: source,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#gender').tagator({autocomplete: gender,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#marital_status').tagator({autocomplete: marital_status,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#has_children').tagator({autocomplete: have_children,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#occupation').tagator({autocomplete: occupation,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#country_of_residence').tagator({autocomplete: country,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#state_of_residence').tagator({autocomplete: state['India'],useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#residential_status').tagator({autocomplete: residential_status,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#mother_tongue').tagator({autocomplete: mother_tongue,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#special_case').tagator({autocomplete: special_case,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#religion').tagator({autocomplete: religion,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#ug').tagator({autocomplete: ug,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#pg').tagator({autocomplete: pg,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#employed_in').tagator({autocomplete: employed_in,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#employed_as').tagator({autocomplete: employed_as,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#father_is').tagator({autocomplete: occupation1,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#mother_is').tagator({autocomplete: occupation1,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#family_value').tagator({autocomplete: family_value,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#family_type').tagator({autocomplete: family_type,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#affluence_level').tagator({autocomplete: affluence_level,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#unmarried_sisters').tagator({autocomplete: children_option,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#married_sisters').tagator({autocomplete: children_option,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#unmarried_brothers').tagator({autocomplete: children_option,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#married_brothers').tagator({autocomplete: children_option,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#industry_type').tagator({autocomplete: industry,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#family_based_out_of').tagator({autocomplete: country,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#native_country').tagator({autocomplete: country,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#native_state').tagator({autocomplete: state["India"],useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#believes_in_horoscope').tagator({autocomplete: horoscope,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#manglik').tagator({autocomplete: manglik,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#mobile_verified').tagator({autocomplete: verified,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#emailid_verified').tagator({autocomplete: verified,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#aadhar_verified').tagator({autocomplete: verified,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#aadhar_proof').tagator({autocomplete: proof,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#body_type').tagator({autocomplete: body_type,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#food_habits').tagator({autocomplete: food_habits,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#hair_type').tagator({autocomplete: hair_type,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#looks').tagator({autocomplete: looks,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#specs').tagator({autocomplete: specs,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#food_habits').tagator({autocomplete: food_habits,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#communication').tagator({autocomplete: communication,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#complexion').tagator({autocomplete: complexion,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#smoke').tagator({autocomplete: smoke,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#drink').tagator({autocomplete: drink,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#calling_for').tagator({autocomplete: calling_for,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#calling_status').tagator({autocomplete: calling_status,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#lead_status').tagator({autocomplete: lead_status,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#lead_biodata').tagator({autocomplete: rec_option,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#lead_matrimony_picture').tagator({autocomplete: rec_option,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#meeting_type').tagator({autocomplete: meeting_type,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#meeting_status').tagator({autocomplete: meeting_status,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#rejection_reason').tagator({autocomplete: rejection_reason,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#client_type').tagator({autocomplete: client_type,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#duration').tagator({autocomplete: duration,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#package_type').tagator({autocomplete: package_type,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});

    

    var params=window.location.search;
    if(params.length<2){
        $("#uploadLI").attr("class","d-none");
    }
    

    function addDropDown(element,ddlist){
        element.append("<option></option>");
        for(var i=0;i<ddlist.length;i++){
            element.append("<option>"+ ddlist[i]+ "</option>");
        }
    }

    loadReligion();
    loadImages();

    function loadReligion(){
        var religion_text=$("#religion").val();
        if(caste.hasOwnProperty(religion_text)){
            $("#caste_div").removeClass("d-none");   
            $('#caste').tagator({autocomplete: caste[religion_text],useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});         
        }
    }

    $(document).on('change', "#religion", function (e) {
        loadReligion();
    });

    $(document).on('change', "#pp_religion", function (e) {
        
        
    });
    
    //$('#pp_caste').tagator({autocomplete: [],useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:-1});                 
    $(document).on('click', "#pp_caste", function (e) {
        var pp_caste_suggestor=[];    
        //$('#pp_caste').tagator();
        //$('#pp_caste').tagator('destroy');       
        var religion=$("#pp_religion").val();
        
        var _religion=religion.split(',');
        
        for(var i=0;i<_religion.length;i++){            
            if(caste.hasOwnProperty(_religion[i])){
                var cl=caste[_religion[i]];
                pp_caste_suggestor=pp_caste_suggestor.concat(cl);
            }        
        }
        $('#pp_caste').tagator({autocomplete: pp_caste_suggestor,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:-1});                 
        
        
    });

    $(document).on('change', "#native_country", function (e) {
        var country=$("#native_country").val();
        if(state.hasOwnProperty(country)){
            
        }
    });

    $(document).on('change', "#country_of_residence", function (e) {
        var country=$("#country_of_residence").val();
        if(state.hasOwnProperty(country)){
            
            
        }
    });

    $(document).on('click', ".item", function (e) {
        
        var curitem=e.target.hash;
        
        var active_div=$("a[aria-expanded='true']");
        for(let i=0;i<active_div.length;i++){
            
            var active_href=active_div[i].hash;
            if(active_href==curitem){

            }else{
                $(active_href).attr("class","collapse");
                
                $("a[href='"+active_href+"']").attr("aria-expanded","false");
            }
        }
        
    });

    $(document).on('click','#deleteImg',function(e){
        e.preventDefault();
        var id=$(this).data("id");
        $.ajax({
            url: "deleteImage.php",
            method: 'POST',
            data: {imgid:id},            
            dataType: 'json',            
            success: function (data1, status, xhr) {
                
                if (data1["status"] === "failure") {
                    alert(data1["message"]);
                } else {
                    loadImages();
                }
            }
        });
    });

    $(document).on('click','#upload_image',function(e){
        e.preventDefault();
        var url = "uploadImage.php";
        var form = $("#uploadForm")[0];
        var data = new FormData(form);
        
        $.ajax({
            type: "POST",
            encType: "multipart/form-data",
            url: url,
            cache: false,
            processData: false,
            contentType: false,
            data: data,
            success: function (msg) {
                
                var status = msg.status;

                if (status === 'success') {
                    $("#img_modal").modal('hide');
                    loadImages();
                } else {
                    alert(msg.message);
                }
            },
            error: function (msg) {
                alert("Couldn't upload file");
            }
        });
    });

    
    function loadImages(){
        var id=$("#uniqueId").val();
        $.ajax({
            url: "loadImages.php",
            method: 'POST',
            data: {pid:id},            
            dataType: 'json',            
            success: function (data1, status, xhr) {
                
                if (data1["status"] === "failure") {
                    //no data found
                } else {
                    var imgDiv=$("#imgDiv");
                    imgDiv.html('');
                    for(var i=0;i<data1.length;i++){
                        imgDiv.append('<div class="col-md-3 mt-2"><div class="card"><img class="card-img-top" src="'+ data1[i].path +'" height=100 width=100 /><div class="card-body"><p class="card-text"><a href="#" id="deleteImg" data-id="'+ data1[i].id +'" >Delete Image</a></p></div></div></div>');
                    }
                }
            }
        });
    }

    $(document).on('click','#createprofile',function(){
        $("#profileSpinner").show();

        var array = $("#profileFrm").serializeArray();
        var json={};

        var pid=$("#uniqueId").val();
        var pid_param="";
        if(pid!==undefined){            
            pid_param="?uniqueId="+pid;            
        }
        
    
        jQuery.each(array, function() {
            json[this.name] = this.value || '';
        });

        

        $.ajax({
            url: "addprofile.php"+pid_param,
            method: 'POST',
            data: JSON.stringify(json),
            contentType:"application/json",
            dataType: 'json',            
            success: function (data1, status, xhr) {
                $("#profileSpinner").hide();
                if (data1["status"] === "failure") {
                    var message='<div class="alert alert-danger">' + data1["message"] +"</div>";
                    $("#profileMessage").html(message);
                } else {
                    window.location.href="viewprofile.php";
                }
            }
        });
    });
});
