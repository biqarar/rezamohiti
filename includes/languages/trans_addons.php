<?php
class twigTransTerms
{
 private function transtext()
 {

	//--------------------------------------addons\content_account\appkey\display.html
	echo T_("YOUR API KEY");                                                          // Line 8
	echo T_("GENERATE NEW API KEY");                                                  // Line 9
	echo T_("Get new API KEY");                                                       // Line 11

	//------------------------------addons\content_account\billing\detail\display.html
	echo T_("Name");                                                                  // Line 17
	echo T_("plan");                                                                  // Line 12
	echo T_("Start plan");                                                            // Line 13
	echo T_("Active member");                                                         // Line 14
	echo T_("Usage");                                                                 // Line 79
	echo T_("You are not have billing detail yet!");                                  // Line 39

	//-------------------------------------addons\content_account\billing\display.html
	echo T_("Charge your account");                                                   // Line 9
	echo T_("Choose a gateway and enter an amount to charge your account");           // Line 10
	echo T_("Parsian");                                                               // Line 13
	echo T_("Amount");                                                                // Line 40
	echo T_("Checkout");                                                              // Line 41
	echo T_("Promo code");                                                            // Line 43
	echo T_("If you have a promo code, please enter it below to receive your credit.");// Line 49
	echo T_("Promo Code");                                                            // Line 65
	echo T_("Apply Code");                                                            // Line 55
	echo T_("Your credit");                                                           // Line 70
	echo T_("Click to check detail");                                                 // Line 73
	echo T_("Billing History");                                                       // Line 89
	echo T_("Title");                                                                 // Line 200 Seperate
	echo T_("Date");                                                                  // Line 201 Seperate
	echo T_("Value");                                                                 // Line 116 Seperate
	echo T_("Budget After");                                                          // Line 96
	echo T_("Invoice");                                                               // Line 97
	echo T_("You are not have payment history yet!");                                 // Line 139

	//-----------------------------addons\content_account\billing\invoice\display.html
	echo T_("Factor of team");                                                        // Line 8
	echo T_("Total");                                                                 // Line 21
	echo T_("Price");                                                                 // Line 20
	echo T_("Count");                                                                 // Line 91

	//----------------------------------------addons\content_account\home\display.html
	echo T_("Profile");                                                               // Line 386 Seperate
	echo T_("Billing");                                                               // Line 8

	//-----------------------------------------addons\content_account\main\layout.html
	echo T_("Dashboard");                                                             // Line 93 Seperate

	//-------------------------------------addons\content_account\profile\display.html
	echo T_("First Name *");                                                          // Line 29
	echo T_("Enter a valid name from 3 to 30 character");                             // Line 29
	echo T_("Last Name");                                                             // Line 284
	echo T_("Enter a valid family from 3 to 50 character");                           // Line 36
	echo T_("Display name");                                                          // Line 24
	echo T_("Enter a valid team position from 3 to 50 character");                    // Line 44
	echo T_("allowed extentions jpg, png. Max 1000Kb");                               // Line 142
	echo T_("mobile");                                                                // Line 65
	echo T_("Your mobile");                                                           // Line 67
	echo T_("email");                                                                 // Line 101
	echo T_("Your email");                                                            // Line 75
	echo T_("Money unit");                                                            // Line 82
	echo T_("Please select one unit for default");                                    // Line 92
	echo T_("Toman");                                                                 // Line 29
	echo T_("$");                                                                     // Line 30
	echo T_("Dollar");                                                                // Line 108
	echo T_("Update profile");                                                        // Line 115

	//-----------------------------------------addons\content_account\ref\display.html
	echo T_("Referral Program");                                                      // Line 11
	echo T_("Nobody can tell the Jibres story better than our customers.");           // Line 6
	echo T_("Nobody can tell the Jibres story better than you;)");                    // Line 12
	echo T_("How it works?");                                                         // Line 16
	echo T_("Tell your friends about the Jibres story.");                             // Line 19
	echo T_("Refer your friends through Social Media or Email.");                     // Line 20
	echo T_("Share the referral rewards program with friends on Facebook, Twitter, or Email.");// Line 20
	echo T_("When they click on your post, we’ll know it was you who referred them.");// Line 20
	echo T_("If someone forget to use your link, we allow to set your ref code as promo code in billing page!");// Line 20
	echo T_("Your friend enter to Jibres and receives credit.");                      // Line 23
	echo T_("Your friend enter and receives $5 account credit.");                     // Line 24
	echo T_("Anyone you refer to Jibres that enter using your unique referral link or your promo code will receive $5 in credit.");// Line 24
	echo T_("You all get rewarded.");                                                 // Line 27
	echo T_("Jibres rewards are charge in your account after 7 work days of confirmation.");// Line 28
	echo T_("Amount of charge is depended on your friend total pay and after automatic calculation, system set your gift.");// Line 28
	echo T_("We calculate your percentage until 6 month of your friend registration. Because of that it was your chance to convinced your friend to charge more!");// Line 28
	echo T_("Share your link");                                                       // Line 34
	echo T_("Copy your personal referral link and share it with your friends and followers.");// Line 35
	echo T_("Link");                                                                  // Line 212
	echo T_("Referral stats");                                                        // Line 51
	echo T_("CLICKS");                                                                // Line 55
	echo T_("Number of times your link has been opened.");                            // Line 56
	echo T_("REFERRALS");                                                             // Line 60
	echo T_("People who enter to Jibres using your link.");                           // Line 61
	echo T_("People who connected to you with promo code.");                          // Line 66
	echo T_("Total you refed");                                                       // Line 71
	echo T_("Sum of people referred from you.");                                      // Line 72
	echo T_("Active users");                                                          // Line 77
	echo T_("People who work with their account.");                                   // Line 78
	echo T_("You earned");                                                            // Line 120
	echo T_("Description");                                                           // Line 199 Seperate
	echo T_("Percentage");                                                            // Line 90
	echo T_("Level 1");                                                               // Line 96
	echo T_("People who pay more than 25$.");                                         // Line 97
	echo T_("Level 2");                                                               // Line 102
	echo T_("People who pay more than 50$.");                                         // Line 103
	echo T_("Level 3");                                                               // Line 108
	echo T_("People who pay more than 500$.");                                        // Line 109
	echo T_("Level 4");                                                               // Line 114
	echo T_("People who pay more than 5000$.");                                       // Line 115
	echo T_("Sum of your credit earned from refs.");                                  // Line 121
	echo T_("Confirm earned");                                                        // Line 126
	echo T_("Sum of confirmed credit earned from refs.");                             // Line 127
	echo T_("Enter to get a unique referral link.");                                  // Line 139
	echo T_("Use our logo to help spread the word.");                                 // Line 141
	echo T_("Enter to Jibres");                                                       // Line 144

	//-----------------------------------------addons\content_cp\cms\home\display.html
	echo T_("Comments");                                                              // Line 98 Seperate
	echo T_("Posts");                                                                 // Line 94 Seperate
	echo T_("Page");                                                                  // Line 45
	echo T_("Category");                                                              // Line 56
	echo T_("Tags");                                                                  // Line 12

	//------------------------------------addons\content_cp\comments\edit\display.html
	echo T_("Author");                                                                // Line 55
	echo T_("Email");                                                                 // Line 100
	echo T_("Approve");                                                               // Line 122
	echo T_("Spam");                                                                  // Line 14

	//------------------------------------addons\content_cp\comments\home\display.html
	echo T_("Search");                                                                // Line 112 Seperate
	echo T_("Content");                                                               // Line 57
	echo T_("Status");                                                                // Line 25
	echo T_("Clear filters");                                                         // Line 104
	echo T_("Result not found!");                                                     // Line 103
	echo T_("Search with new keywords.");                                             // Line 103
	echo T_("Hi!");                                                                   // Line 110
	echo T_("Try to start with add new record!");                                     // Line 92

	//----------------------------------------------addons\content_cp\main\layout.html
	echo T_("CMS");                                                                   // Line 46
	echo T_("News");                                                                  // Line 10
	echo T_("Categries");                                                             // Line 11
	echo T_("Pages");                                                                 // Line 95 Seperate
	echo T_("Options");                                                               // Line 84 Seperate
	echo T_("Last update on");                                                        // Line 22
	echo T_("wait for next version!");                                                // Line 22
	echo T_("Powered by");                                                            // Line 24
	echo T_("Some right reserved");                                                   // Line 24
	echo T_("Ermile");                                                                // Line 177 Seperate
	echo T_("Version");                                                               // Line 108 Seperate

	//---------------------------------------addons\content_cp\posts\home\display.html

	//---------------------------------------------addons\content_cp\posts\layout.html
	echo T_("Enter title here");                                                      // Line 4
	echo T_("Enter a good and short title");                                          // Line 4
	echo T_("Enter subtitle here");                                                   // Line 11
	echo T_("Subtitle can used based on theme support");                              // Line 11
	echo T_("Enter excerpt here");                                                    // Line 17
	echo T_("Excerpt used for social media and search engines");                      // Line 17
	echo T_("Slug");                                                                  // Line 132
	echo T_("Slug used to create url");                                               // Line 28
	echo T_("Write post ");                                                           // Line 34
	echo T_("Publish date");                                                          // Line 41
	echo T_("To add image gallery drop file here or");                                // Line 47
	echo T_("Save");                                                                  // Line 46
	echo T_("Publish");                                                               // Line 68
	echo T_("Draft");                                                                 // Line 73
	echo T_("Deleted");                                                               // Line 78
	echo T_("Comment");                                                               // Line 89
	echo T_("Language");                                                              // Line 95
	echo T_("Whithout language");                                                     // Line 97
	echo T_("Choose category of post");                                               // Line 110
	echo T_("Add tag manually to link articles togethers");                           // Line 125
	echo T_("Tag");                                                                   // Line 127
	echo T_("Tag keywords...");                                                       // Line 131
	echo T_("Add tag");                                                               // Line 132
	echo T_("Remove");                                                                // Line 261

	//--------------------------------------------addons\content_cp\terms\display.html
	echo T_("Type");                                                                  // Line 57
	echo T_("Add");                                                                   // Line 149 Seperate
	echo T_("Edit");                                                                  // Line 150 Seperate
	echo T_("Require");                                                               // Line 122
	echo T_("Enter a valid title");                                                   // Line 124
	echo T_("Used for url");                                                          // Line 130
	echo T_("Enter a valid slug");                                                    // Line 132
	echo T_("Parent Category");                                                       // Line 139
	echo T_("Please select one itme");                                                // Line 141
	echo T_("Active");                                                                // Line 56
	echo T_("Deactive");                                                              // Line 161
	echo T_("Excerpt");                                                               // Line 169
	echo T_("Try to start with add new records!");                                    // Line 193

	//----------------------------------addons\content_enter\autoredirect\display.html
	echo T_("Go");                                                                    // Line 129

	//-------------------------------------------addons\content_enter\ban\display.html
	echo T_("What are you doing!");                                                   // Line 7
	echo T_("If you are bot, be easy and call your mom");                             // Line 8
	echo T_("If you are human being, what are you doing here! be personable...");     // Line 9

	//-----------------------------------------addons\content_enter\block\display.html
	echo T_("You are blocked becauese of some reason!");                              // Line 7
	echo T_("If have problem");                                                       // Line 8
	echo T_("Contact us");                                                            // Line 8

	//----------------------------------------addons\content_enter\byebye\display.html
	echo T_("We are so sorry for losing you!");                                       // Line 7
	echo T_("if you want you can come back to");                                      // Line 8
	echo T_("join us");                                                               // Line 8
	echo T_("Bye Bye :(");                                                            // Line 9

	//--------------------------------------addons\content_enter\callback\display.html
	echo T_("Hi");                                                                    // Line 71
	echo T_("You must not be here!");                                                 // Line 7

	//----------------------------------------addons\content_enter\delete\display.html
	echo T_("Why you want to delete your account!?");                                 // Line 5

	//--------------------------------addons\content_enter\delete\request\display.html
	echo T_("We detected two accout for you");                                        // Line 8
	echo T_("Please remove one of them and");                                         // Line 9
	echo T_("if you want to delete this account");                                    // Line 9
	echo T_("click here");                                                            // Line 10

	//----------------------------------addons\content_enter\email\change\display.html
	echo T_("Remove my email address");                                               // Line 12

	//---------------------------addons\content_enter\email\change\google\display.html
	echo T_("We found your Google Mail that is different from your current google mail");// Line 6
	echo T_("Would you like to change your old google mail?");                        // Line 7
	echo T_("Change to");                                                             // Line 10
	echo T_("Update google mail");                                                    // Line 14
	echo T_("Don't change");                                                          // Line 16

	//----------------------------------------addons\content_enter\google\display.html

	//------------------------------------------addons\content_enter\home\display.html
	echo T_("You");                                                                   // Line 5

	//--------------------------------addons\content_enter\mobile\request\display.html
	echo T_("If you wanna more secure enter your mobile");                            // Line 6
	echo T_("I dont want use mobile");                                                // Line 11

	//------------------------------------------addons\content_enter\okay\display.html
	echo T_("You are logined ;)");                                                    // Line 8
	echo T_("Be patient or");                                                         // Line 9
	echo T_("click here!");                                                           // Line 9

	//------------------------------------------addons\content_enter\pass\display.html
	echo T_("Can't access your account?");                                            // Line 12

	//---------------------------------addons\content_enter\pass\recovery\display.html
	echo T_("Remembered your password?");                                             // Line 48

	//--------------------------------------addons\content_enter\sessions\display.html
	echo T_("Terminate");                                                             // Line 11

	//-------------------------------addons\content_enter\username\change\display.html
	echo T_("Remove username");                                                       // Line 12

	//----------------------------------------addons\content_enter\verify\display.html
	echo T_("Send code in your Telegram");                                            // Line 11
	echo T_("Send code as sms to your phone");                                        // Line 18
	echo T_("Call you to send code");                                                 // Line 25
	echo T_("You send code to us and we check it");                                   // Line 33
	echo T_("Send code in your email");                                               // Line 41

	//----------------------------------addons\content_enter\verify\email\display.html
	echo T_("We can not find eny way to send verification code to you!");             // Line 6

	//-----------------------------------addons\content_enter\verify\what\display.html
	echo T_("You must set a mobile or email to continue");                            // Line 7
	echo T_("Go back");                                                               // Line 151

	//-------------------------------------------addons\content_su\backup\display.html
	echo T_("Backup database");                                                       // Line 5
	echo T_("Back");                                                                  // Line 10
	echo T_("File is empty");                                                         // Line 15
	echo T_("Database info");                                                         // Line 25
	echo T_("Show Auto backup log file");                                             // Line 30
	echo T_("You can create backup now");                                             // Line 33
	echo T_("Backup now");                                                            // Line 34
	echo T_("Auto backup");                                                           // Line 47
	echo T_("Sise");                                                                  // Line 96
	echo T_("Download");                                                              // Line 98
	echo T_("No backup was found");                                                   // Line 103
	echo T_("Start backup every");                                                    // Line 124
	echo T_("Year");                                                                  // Line 126
	echo T_("Month");                                                                 // Line 127
	echo T_("Week");                                                                  // Line 128
	echo T_("Day");                                                                   // Line 458 Seperate
	echo T_("hour");                                                                  // Line 33 Seperate
	echo T_("Start backup at time");                                                  // Line 135
	echo T_("Life time of old backup");                                               // Line 165
	echo T_("2 years");                                                               // Line 167
	echo T_("one year");                                                              // Line 168
	echo T_("6 months");                                                              // Line 169
	echo T_("3 months");                                                              // Line 170
	echo T_("2 months");                                                              // Line 171
	echo T_("one month");                                                             // Line 172
	echo T_("one week");                                                              // Line 173
	echo T_("2 weeks");                                                               // Line 174
	echo T_("one day");                                                               // Line 175
	echo T_("3 days");                                                                // Line 176
	echo T_("5 days");                                                                // Line 177

	//-----------------------------------------addons\content_su\dbtables\display.html
	echo T_("Search in :dbtabless");                                                  // Line 57
	echo T_("Try to start with add new :dbtables!");                                  // Line 112

	//---------------------------------------------addons\content_su\home\display.html
	echo T_("System master controll");                                                // Line 6
	echo T_("Raw table");                                                             // Line 35
	echo T_("Control Panel");                                                         // Line 151 Seperate
	echo T_("Tools");                                                                 // Line 162 Seperate
	echo T_("Transactions");                                                          // Line 32
	echo T_("Log items");                                                             // Line 86
	echo T_("Logs");                                                                  // Line 31
	echo T_("Users");                                                                 // Line 100 Seperate
	echo T_("Notifications");                                                         // Line 127
	echo T_("Send notify");                                                           // Line 138
	echo T_("Sample");                                                                // Line 65

	//-----------------------------------addons\content_su\invoicedetails\display.html
	echo T_("id");                                                                    // Line 16
	echo T_("invoice_id");                                                            // Line 17
	echo T_("title");                                                                 // Line 230 Seperate
	echo T_("price");                                                                 // Line 19
	echo T_("count");                                                                 // Line 20
	echo T_("total");                                                                 // Line 21
	echo T_("discount");                                                              // Line 22
	echo T_("desc");                                                                  // Line 34

	//-----------------------------------------addons\content_su\invoices\display.html
	echo T_("ID");                                                                    // Line 21
	echo T_("User id");                                                               // Line 18
	echo T_("Is Temp?");                                                              // Line 19
	echo T_("Total Discount");                                                        // Line 22
	echo T_("Count Detail");                                                          // Line 24
	echo T_("Detail");                                                                // Line 26
	echo T_("Yes");                                                                   // Line 39
	echo T_("No");                                                                    // Line 41

	//-----------------------------------------addons\content_su\logitems\display.html
	echo T_("Caller");                                                                // Line 20
	echo T_("Priority");                                                              // Line 22
	echo T_("datecreated");                                                           // Line 23
	echo T_("Click to show all logs by this logitems");                               // Line 33

	//------------------------------------addons\content_su\logitems\edit\display.html
	echo T_("logitems Detail");                                                       // Line 6
	echo T_("caller");                                                                // Line 16
	echo T_("priority");                                                              // Line 31
	echo T_("Critical");                                                              // Line 33
	echo T_("High");                                                                  // Line 34
	echo T_("Medium");                                                                // Line 35
	echo T_("Low");                                                                   // Line 36

	//---------------------------------------------addons\content_su\logs\display.html
	echo T_("Log item id");                                                           // Line 18
	echo T_("User_id");                                                               // Line 23
	echo T_("Data");                                                                  // Line 24
	echo T_("Desc");                                                                  // Line 25
	echo T_("createdate");                                                            // Line 26
	echo T_("Meta");                                                                  // Line 28

	//----------------------------------------------addons\content_su\main\layout.html
	echo T_("Send Nofity");                                                           // Line 11
	echo T_("Sample Design");                                                         // Line 13

	//------------------------------------addons\content_su\notifications\display.html
	echo T_("user_id");                                                               // Line 17
	echo T_("user_idsender");                                                         // Line 18
	echo T_("content");                                                               // Line 20
	echo T_("url");                                                                   // Line 21
	echo T_("read");                                                                  // Line 22
	echo T_("star");                                                                  // Line 23
	echo T_("status");                                                                // Line 24
	echo T_("category");                                                              // Line 139 Seperate
	echo T_("senddate");                                                              // Line 27
	echo T_("deliverdate");                                                           // Line 28
	echo T_("expiredate");                                                            // Line 29
	echo T_("readdate");                                                              // Line 30
	echo T_("gateway");                                                               // Line 31
	echo T_("auto");                                                                  // Line 32
	echo T_("datemodified");                                                          // Line 33

	//---------------------------------------addons\content_su\permission\display.html
	echo T_("Change permission of user");                                             // Line 6
	echo T_("Permission cat");                                                        // Line 10
	echo T_("Save change");                                                           // Line 32

	//-------------------------------------------addons\content_su\sample\display.html
	echo T_("Unbelievable Styles!");                                                  // Line 8
	echo T_("Definitions aren't limited to just buttons on a page. Siftal's components allow several distinct types of definitions: elements, collections, views, modules and behaviors which cover the gamut of interface design.");// Line 9
	echo T_("For improved cross-browser rendering, we use <a href='sample/reset'>special reset</a> to correct inconsistencies across browsers and devices while providing slightly more opinionated resets to common HTML elements.");// Line 10
	echo T_("Button");                                                                // Line 41
	echo T_("Primary");                                                               // Line 128
	echo T_("Warn");                                                                  // Line 131
	echo T_("Info");                                                                  // Line 7
	echo T_("Check buttons collection");                                              // Line 59
	echo T_("Messages");                                                              // Line 47
	echo T_("This site uses cookies");                                                // Line 67
	echo T_("Hello dear!");                                                           // Line 72
	echo T_("Looking for help?");                                                     // Line 75
	echo T_("Use our help center");                                                   // Line 77
	echo T_("Check our FAQ");                                                         // Line 78
	echo T_("Icons");                                                                 // Line 87
	echo T_("Badge");                                                                 // Line 112
	echo T_("Add New");                                                               // Line 113
	echo T_("Notification");                                                          // Line 28
	echo T_("125");                                                                   // Line 115
	echo T_("64");                                                                    // Line 116
	echo T_("7");                                                                     // Line 27
	echo T_(" Home");                                                                 // Line 63
	echo T_("Breadcrumb");                                                            // Line 7
	echo T_("Pagination");                                                            // Line 7
	echo T_("Previous");                                                              // Line 89
	echo T_("6");                                                                     // Line 140
	echo T_("8");                                                                     // Line 142
	echo T_("Next");                                                                  // Line 137
	echo T_("Progress");                                                              // Line 12
	echo T_("Table");                                                                 // Line 165
	echo T_("First Name");                                                            // Line 283
	echo T_("Username");                                                              // Line 27
	echo T_("Javad");                                                                 // Line 299
	echo T_("Evazzadeh");                                                             // Line 300
	echo T_("Reza");                                                                  // Line 309
	echo T_("Mohiti");                                                                // Line 310
	echo T_("Hasan");                                                                 // Line 319
	echo T_("Salehi");                                                                // Line 320
	echo T_("Footer");                                                                // Line 292
	echo T_("Input");                                                                 // Line 7
	echo T_("@");                                                                     // Line 188
	echo T_(".");                                                                     // Line 194
	echo T_("+");                                                                     // Line 197
	echo T_("-");                                                                     // Line 199
	echo T_("Textarea");                                                              // Line 7
	echo T_("Vcard");                                                                 // Line 216
	echo T_("Joined in 2018");                                                        // Line 378
	echo T_("Ermile is our company in Qom!");                                         // Line 379
	echo T_("123 Friends");                                                           // Line 381
	echo T_("Ermile requested permission to transfer <b>Tejarak</b> team to you");    // Line 135
	echo T_("Decline");                                                               // Line 139
	echo T_("Javad Evazzadeh");                                                       // Line 10 Seperate
	echo T_("3 days ago");                                                            // Line 190
	echo T_("Check more!");                                                           // Line 285
	echo T_("Javad Evazzdeh");                                                        // Line 388
	echo T_("CEO and Founder");                                                       // Line 389
	echo T_("Clockpicker");                                                           // Line 271
	echo T_("Datepicker");                                                            // Line 281
	echo T_("Checkbox");                                                              // Line 298
	echo T_("Check1 Sample1");                                                        // Line 20
	echo T_("Switch");                                                                // Line 37
	echo T_("YES");                                                                   // Line 87
	echo T_("NO!");                                                                   // Line 87
	echo T_("Are you like Siftal?");                                                  // Line 88
	echo T_("Datalist");                                                              // Line 7
	echo T_("Radio");                                                                 // Line 7
	echo T_("Blue");                                                                  // Line 138
	echo T_("Default");                                                               // Line 42
	echo T_("Red");                                                                   // Line 114
	echo T_("Yellow");                                                                // Line 122
	echo T_("Green");                                                                 // Line 130
	echo T_("Black");                                                                 // Line 58

	//------------------------------------addons\content_su\sample\template\badge.html
	echo T_("Badges");                                                                // Line 7
	echo T_("Documentation and examples for badges, our small count and labeling component.");// Line 8
	echo T_("Examples");                                                              // Line 12
	echo T_("Badges scale to match the size of the immediate parent element by using relative font sizing and <code class='code1'>em</code> units.");// Line 13
	echo T_("Example heading");                                                       // Line 21
	echo T_("New");                                                                   // Line 21
	echo T_("Badges can be used as part of links or buttons to provide a counter.");  // Line 24
	echo T_("5");                                                                     // Line 28
	echo T_("Contextual variations");                                                 // Line 34
	echo T_("Add any of the below mentioned modifier classes to change the appearance of a badge.");// Line 35
	echo T_("Secondary");                                                             // Line 78
	echo T_("Success");                                                               // Line 29
	echo T_("Danger");                                                                // Line 130
	echo T_("Warning");                                                               // Line 30
	echo T_("Light");                                                                 // Line 79
	echo T_("Dark");                                                                  // Line 80
	echo T_("Rounded badge");                                                         // Line 62
	echo T_("Use the <code class='code1'>.rounded</code> modifier class to make badges more rounded (with a larger border-radius and additional horizontal padding).");// Line 63
	echo T_("Links");                                                                 // Line 90
	echo T_("Using the <code class='code1'>.badge</code> classes with the <code class='code1'>&lt;a&gt;</code> element quickly provide actionable badges with hover and focus states.");// Line 91

	//----------------------------------addons\content_su\sample\template\barcode.html
	echo T_("Barcode");                                                               // Line 18
	echo T_("A special handle to give barcode or rfid code");                         // Line 8
	echo T_("Example");                                                               // Line 13
	echo T_("This type of input filled only with readers, because of type speed!");   // Line 14
	echo T_("Code");                                                                  // Line 73
	echo T_("Simple input");                                                          // Line 23
	echo T_("input");                                                                 // Line 25

	//--------------------------------------addons\content_su\sample\template\box.html
	echo T_("box");                                                                   // Line 7
	echo T_("Siftal's box provide a flexible and extensible content container for title and contents.");// Line 8
	echo T_("You can use elements of this page in all part of site and mix them with another elements.");// Line 14
	echo T_("Salam");                                                                 // Line 18

	//-------------------------------addons\content_su\sample\template\breadcrumb.html
	echo T_("Indicate the current page's location within a navigational hierarchy that automatically adds separators via CSS.");// Line 8
	echo T_("Separators are automatically added in CSS through ::before and content.");// Line 13
	echo T_("Sizes");                                                                 // Line 291
	echo T_("A breadcrumb can vary in size");                                         // Line 29

	//-----------------------------------addons\content_su\sample\template\button.html
	echo T_("Use Siftal's custom button styles for actions in forms, dialogs, and more with support for multiple sizes, states, and more.");// Line 8
	echo T_("Simple Examples");                                                       // Line 13
	echo T_("Siftal includes several predefined button styles, each serving its own semantic purpose, with a few extras thrown in for more control.");// Line 13
	echo T_("Default Btn");                                                           // Line 76
	echo T_("a simple link");                                                         // Line 81
	echo T_("Button tags");                                                           // Line 33
	echo T_("The <code class='code1'>.btn</code> classes are designed to be used with the <code class='code1'>&lt;button&gt;</code> element. However, you can also use these classes on <code class='code1'>&lt;a&gt;</code> or <code class='code1'>&lt;input&gt;</code> elements (though some browsers may apply a slightly different rendering).");// Line 34
	echo T_("When using button classes on <code class='code1'>&lt;a&gt;</code> elements that are used to trigger in-page functionality (like collapsing content), rather than linking to new pages or sections within the current page, these links should be given a <code class='code1'>role='button'</code> to appropriately convey their purpose to assistive technologies such as screen readers.");// Line 36
	echo T_("Link!");                                                                 // Line 45
	echo T_("Outline buttons");                                                       // Line 51
	echo T_("In need of a button, but not the hefty background colors they bring? Replace the default modifier classes with the <code class='code1'>.outline</code> ones to remove all background images and colors on any button.");// Line 52
	echo T_("Inverted");                                                              // Line 72
	echo T_("A button can be formatted to appear on dark backgrounds");               // Line 73
	echo T_("Fancy larger or smaller buttons? Add .btn-lg or .btn-sm for additional sizes.");// Line 100
	echo T_("Extra small xs");                                                        // Line 103
	echo T_("Small sm");                                                              // Line 104
	echo T_("Normal");                                                                // Line 336
	echo T_("Large lg");                                                              // Line 106
	echo T_("Extra Large xl");                                                        // Line 107
	echo T_("Primary Block");                                                         // Line 110
	echo T_("Secondary block");                                                       // Line 111
	echo T_("Active state");                                                          // Line 117
	echo T_("Buttons will appear pressed (with a darker background) when active. There’s no need to add a class to <code class='code1'>&lt;button&gt;</code>s as they use a pseudo-class. However, you can still force the same active appearance with .active should you need to replicate the state programmatically.");// Line 118
	echo T_("Disabled state");                                                        // Line 138
	echo T_("Make buttons look inactive by adding the disabled boolean attribute to any <code class='code1'>&lt;button&gt;</code> element.");// Line 139
	echo T_("Disabled buttons using the <code class='code1'>&lt;a&gt;</code> element behave a bit different because <code class='code1'>&lt;a&gt;</code>s don’t support the <code class='code1'>disabled</code> attribute, so you must add the <code class='code1'>.disabled</code> class to make it visually appear disabled.");// Line 141
	echo T_("disabled");                                                              // Line 145
	echo T_(".disabled");                                                             // Line 146
	echo T_(".disabled Link");                                                        // Line 147
	echo T_("Link functionality caveat");                                             // Line 151
	echo T_("The <code class='code1'>.disabled</code> class uses <code class='code1'>pointer-events: none</code> to try to disable the link functionality of <code class='code1'>&lt;a&gt;</code>s, but that CSS property is not yet standardized. In addition, even in browsers that do support <code class='code1'>pointer-events: none</code>, keyboard navigation remains unaffected, meaning that sighted keyboard users and users of assistive technologies will still be able to activate these links. So to be safe, add a <code class='code1'>tabindex='-1'</code> attribute on these links (to prevent them from receiving keyboard focus) and use custom JavaScript to disable their functionality.");// Line 153

	//---------------------------------addons\content_su\sample\template\checkbox.html
	echo T_("Easily extend form controls by adding text, buttons, or button groups on either side of textual inputs.");// Line 8
	echo T_("Simple Examples with input element");                                    // Line 13
	echo T_("Check1 Sample2");                                                        // Line 25
	echo T_("Check1 Sample3");                                                        // Line 30
	echo T_("With custom text");                                                      // Line 61
	echo T_("HI");                                                                    // Line 68
	echo T_("BYE");                                                                   // Line 68
	echo T_("With more detail");                                                      // Line 78
	echo T_("Subscribe to our newsletter");                                           // Line 82
	echo T_("Special use");                                                           // Line 94
	echo T_("Gender");                                                                // Line 54

	//------------------------------------addons\content_su\sample\template\clock.html
	echo T_("Clock");                                                                 // Line 7
	echo T_("A simple real time clock using online and offline method for update.");  // Line 8

	//------------------------------addons\content_su\sample\template\clockpicker.html
	echo T_("ClockPicker");                                                           // Line 7
	echo T_("Easily add time picker to your project");                                // Line 8
	echo T_("Read more info and example about clockpicker");                          // Line 16
	echo T_("Simple");                                                                // Line 37
	echo T_("Simple without default value");                                          // Line 23
	echo T_("choose clock");                                                          // Line 25
	echo T_("Simple with addon");                                                     // Line 28
	echo T_("Place at right, align the arrow to top, without auto close");            // Line 35
	echo T_("Ok");                                                                    // Line 23
	echo T_("Place at right, align the arrow to bottom");                             // Line 50
	echo T_("Place at left, align the arrow to top");                                 // Line 45
	echo T_("Place at top, alighn the arrow to right");                               // Line 55
	echo T_("Place at top, alighn the arrow to left");                                // Line 60
	echo T_("Place at bottom, alighn the arrow to right");                            // Line 65
	echo T_("Place at bottom, alighn the arrow to left");                             // Line 70
	echo T_("Set options in javascript, instead of data-*");                          // Line 77
	echo T_("Callbacks");                                                             // Line 83

	//-------------------------------------addons\content_su\sample\template\crop.html
	echo T_("Crop Images");                                                           // Line 7
	echo T_("A simple and full feature crop for avatar or something else!");          // Line 8
	echo T_("Check more on cropprer documentation!");                                 // Line 14
	echo T_("Only run cropper without anything!");                                    // Line 17
	echo T_("Only run cropper with aspect ratio and min width and height on cropbox");// Line 24
	echo T_("Complete example with full function");                                   // Line 31
	echo T_("run cropper with aspect ratio and min width and height in modal");       // Line 98
	echo T_("Crop image in modal");                                                   // Line 101
	echo T_("Crop your avatar");                                                      // Line 170
	echo T_("Please choose and crop your image");                                     // Line 112
	echo T_("complete example of crop in modal and show preview after that");         // Line 126
	echo T_("Cancel");                                                                // Line 90 Seperate
	echo T_("Crop");                                                                  // Line 177
	echo T_("complete example of crop in modal and show preview after that with default image");// Line 158

	//---------------------------------addons\content_su\sample\template\datalist.html
	echo T_("Datalist element of HTML5 forms is pretty cool!");                       // Line 8
	echo T_("Find Iran State");                                                       // Line 18
	echo T_("Full width");                                                            // Line 20
	echo T_("Find Iran State 2");                                                     // Line 45
	echo T_("Qom");                                                                   // Line 63 Seperate
	echo T_("Tehran");                                                                // Line 27
	echo T_("Awesomplete");                                                           // Line 35
	echo T_("No JS");                                                                 // Line 37
	echo T_("No JS and min char 1 and autoselect first item");                        // Line 40
	echo T_("With datalist");                                                         // Line 43
	echo T_("Full Sample");                                                           // Line 48

	//-------------------------------addons\content_su\sample\template\datepicker.html
	echo T_("Date Picker");                                                           // Line 7
	echo T_("A simple date picker for fast use");                                     // Line 8
	echo T_("Read more info and example about persian datepicker");                   // Line 14
	echo T_("Without any option");                                                    // Line 18
	echo T_("with default value");                                                    // Line 21
	echo T_("Without any option to use in php, get timestamp on backend");            // Line 26
	echo T_("With custom format");                                                    // Line 33
	echo T_("Connect to another field");                                              // Line 40
	echo T_("Inline Mode");                                                           // Line 46
	echo T_("English Number");                                                        // Line 52
	echo T_("Special View mode");                                                     // Line 57

	//---------------------------------addons\content_su\sample\template\deadline.html
	echo T_("Deadline");                                                              // Line 7
	echo T_("Siftal's deadline provide a simple box to show title and remain date."); // Line 8
	echo T_("Sample Deadline");                                                       // Line 18
	echo T_("days left");                                                             // Line 67
	echo T_("Sample Deadline2");                                                      // Line 29
	echo T_("Orange");                                                                // Line 118
	echo T_("Sample Deadline3");                                                      // Line 64

	//-------------------------------------addons\content_su\sample\template\grid.html
	echo T_("Page Grids");                                                            // Line 31
	echo T_("one row will divide to the number of parts, if you just set class='c'"); // Line 123
	echo T_("on large screens if you just set class='x', it will take the x class ratio");// Line 134
	echo T_("three equal parts");                                                     // Line 142
	echo T_("sum of parts is 12, every part will take ratio of it's class number");   // Line 151
	echo T_("it will take just 6 part of 12");                                        // Line 162
	echo T_("float right boxes, by .os class");                                       // Line 170
	echo T_("Responsive on medium devices, like tablet's by .m classes");             // Line 178
	echo T_("Responsive on mobile devices by .s classes");                            // Line 186

	//-------------------------------------addons\content_su\sample\template\icon.html
	echo T_("siftal");                                                                // Line 13
	echo T_("This was created with ");                                                // Line 14
	echo T_("Fontastic");                                                             // Line 14
	echo T_("CSS mapping");                                                           // Line 16
	echo T_("Character mapping");                                                     // Line 2027

	//------------------------------------addons\content_su\sample\template\input.html
	echo T_("Focus");                                                                 // Line 51
	echo T_("Readonly");                                                              // Line 61
	echo T_("Disabled");                                                              // Line 66
	echo T_("All type of input conditions");                                          // Line 74
	echo T_("Extra Examples with input class and multiple part");                     // Line 43
	echo T_("Add conditions class to input el");                                      // Line 87
	echo T_("Simple input with label");                                               // Line 104
	echo T_("Family");                                                                // Line 110
	echo T_("Extra features");                                                        // Line 123
	echo T_("Fix addons");                                                            // Line 165
	echo T_("Sizing");                                                                // Line 187
	echo T_("Button addons");                                                         // Line 214
	echo T_("Search...");                                                             // Line 218
	echo T_("Go!");                                                                   // Line 225
	echo T_("Ding Ding!");                                                            // Line 235
	echo T_("Simple file input");                                                     // Line 253
	echo T_("Simple file input only accept images");                                  // Line 260
	echo T_("Simple avatar selector with simple preview");                            // Line 267
	echo T_("Simple file input with min 100kb and max 200kb size!");                  // Line 286

	//-------------------------------------addons\content_su\sample\template\life.html
	echo T_("Life");                                                                  // Line 7
	echo T_("Add life to page, after end life hard refresh page");                    // Line 8
	echo T_("Control from body[data-life=123]");                                      // Line 12

	//-------------------------------------addons\content_su\sample\template\line.html
	echo T_("Line");                                                                  // Line 7
	echo T_("Add fix simple line to bottom of page");                                 // Line 8
	echo T_("How are you?");                                                          // Line 38
	echo T_("Ermile is intelligent");                                                 // Line 19
	echo T_("goodbye");                                                               // Line 20

	//--------------------------------------addons\content_su\sample\template\msg.html
	echo T_("Provide contextual feedback messages for typical user actions with the handful of available and flexible alert messages.");// Line 8
	echo T_("This is a primary message or alert. check it out!");                     // Line 16
	echo T_("This is a secondary message or alert. check it out!");                   // Line 17
	echo T_("This is a success message or alert. check it out!");                     // Line 18
	echo T_("This is a danger message or alert. check it out!");                      // Line 19
	echo T_("This is a warning message or alert. check it out!");                     // Line 20
	echo T_("This is a info message or alert. check it out!");                        // Line 21
	echo T_("This is a light message or alert. check it out!");                       // Line 22
	echo T_("This is a dark message or alert. check it out!");                        // Line 23
	echo T_("Examples with light color");                                             // Line 26
	echo T_("This is a primary2 message or alert. check it out!");                    // Line 28
	echo T_("This is a secondary2 message or alert. check it out!");                  // Line 29
	echo T_("This is a success2 message or alert. check it out!");                    // Line 30
	echo T_("This is a danger2 message or alert. check it out!");                     // Line 31
	echo T_("This is a warning2 message or alert. check it out!");                    // Line 32
	echo T_("This is a info2 message or alert. check it out!");                       // Line 33
	echo T_("This is a light2 message or alert. check it out!");                      // Line 34
	echo T_("This is a dark2 message or alert. check it out!");                       // Line 35
	echo T_("Link color");                                                            // Line 41
	echo T_("Use the <code class='code1'>.link</code> utility class to quickly provide matching colored links within any alert.");// Line 42
	echo T_("This is a primary alert with");                                          // Line 45
	echo T_("an example link");                                                       // Line 52
	echo T_("Give it a click if you like.");                                          // Line 52
	echo T_("This is a secondary alert with");                                        // Line 46
	echo T_("This is a success alert with");                                          // Line 47
	echo T_("This is a danger alert with");                                           // Line 48
	echo T_("This is a warning alert with");                                          // Line 49
	echo T_("This is a info alert with");                                             // Line 50
	echo T_("This is a light alert with");                                            // Line 51
	echo T_("This is a dark alert with");                                             // Line 52
	echo T_("Additional content");                                                    // Line 58
	echo T_("Alerts can also contain additional HTML elements like headings, paragraphs and dividers.");// Line 59
	echo T_("Well done!");                                                            // Line 62
	echo T_("Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.");// Line 63
	echo T_("Whenever you need to, be sure to use margin utilities to keep things nice and tidy.");// Line 65
	echo T_("Compact");                                                               // Line 71
	echo T_("A message can only take up the width of its content.");                  // Line 72
	echo T_("Aww yeah, you successfully read this important alert message. Sign up now!");// Line 74
	echo T_("Another type of usage");                                                 // Line 79
	echo T_("List Message");                                                          // Line 81
	echo T_("A message with a list");                                                 // Line 82
	echo T_("Was this what you wanted?");                                             // Line 85
	echo T_("It's good to see you again.");                                           // Line 87
	echo T_("Did you know it's been a while?");                                       // Line 88
	echo T_("Have you heard about our car?");                                         // Line 97
	echo T_("Get the best news of the year!");                                        // Line 98
	echo T_("Just one second");                                                       // Line 107
	echo T_("We're fetching that content for you. What content!?");                   // Line 108

	//------------------------------------addons\content_su\sample\template\notif.html
	echo T_("Notif");                                                                 // Line 7
	echo T_("Show simple and powerful notificaion via js and html attr");             // Line 8
	echo T_("Complete Example with autorun");                                         // Line 16
	echo T_("Hello World!");                                                          // Line 17
	echo T_("On page route run this");                                                // Line 17
	echo T_("Simple Notification");                                                   // Line 22
	echo T_("With title");                                                            // Line 23
	echo T_("Sticky Notif");                                                          // Line 24
	echo T_("Colored");                                                               // Line 250
	echo T_("Error");                                                                 // Line 188 Seperate
	echo T_("Notif in special target");                                               // Line 36
	echo T_("Sticky");                                                                // Line 38
	echo T_("Notif in all position");                                                 // Line 44
	echo T_("Top");                                                                   // Line 53
	echo T_("Left");                                                                  // Line 65
	echo T_("Center");                                                                // Line 68
	echo T_("Right");                                                                 // Line 71
	echo T_("Bottom");                                                                // Line 71

	//--------------------------------------addons\content_su\sample\template\old.html
	echo T_("Sample Page of admin");                                                  // Line 27
	echo T_("Template Form");                                                         // Line 36
	echo T_("List");                                                                  // Line 52
	echo T_("Headings");                                                              // Line 57
	echo T_("message (.msg)");                                                        // Line 198
	echo T_("message warning (.msg .warning)");                                       // Line 199
	echo T_("message info (.msg .info)");                                             // Line 200
	echo T_("message success (.msg .success)");                                       // Line 201
	echo T_("message error (.msg .error)");                                           // Line 202
	echo T_("message danger (.msg .danger)");                                         // Line 203
	echo T_("message compact (.msg .compact)");                                       // Line 204
	echo T_("message small (.msg .small)");                                           // Line 205
	echo T_("message big (.msg .big)");                                               // Line 206
	echo T_("message massive (.msg .massive)");                                       // Line 207
	echo T_("Privacy mode");                                                          // Line 334
	echo T_("Private");                                                               // Line 339
	echo T_("Public");                                                                // Line 343
	echo T_("Short Name");                                                            // Line 256
	echo T_("phoneNumber");                                                           // Line 263
	echo T_("Alias");                                                                 // Line 270
	echo T_("Default setting for new members of team");                               // Line 300
	echo T_("Show users avatars");                                                    // Line 305
	echo T_("Allow plus");                                                            // Line 310
	echo T_("Allow minus");                                                           // Line 314
	echo T_("Remote user");                                                           // Line 319
	echo T_("24 hour");                                                               // Line 323
	echo T_("allowPlus");                                                             // Line 330
	echo T_("Advance");                                                               // Line 357
	echo T_("First");                                                                 // Line 379
	echo T_("Second");                                                                // Line 380
	echo T_("Third");                                                                 // Line 381
	echo T_("This is heading 1");                                                     // Line 386
	echo T_("This is heading 2");                                                     // Line 387
	echo T_("This is heading 3");                                                     // Line 388
	echo T_("This is heading 4");                                                     // Line 389
	echo T_("This is heading 5");                                                     // Line 390
	echo T_("This is heading 6");                                                     // Line 391

	//-------------------------------addons\content_su\sample\template\pagination.html
	echo T_("Documentation and examples for showing pagination to indicate a series of related content exists across multiple pages.");// Line 8
	echo T_("Overview");                                                              // Line 12
	echo T_("We use a large block of connected links for our pagination, making links hard to miss and easily scalable—all while providing large hit areas. Pagination is built with list HTML elements so screen readers can announce the number of available links. Use a wrapping <nav> element to identify it as a navigation section to screen readers and other assistive technologies.");// Line 13
	echo T_("A pagination can use in many colors");                                   // Line 24
	echo T_("A pagination can vary in size");                                         // Line 56

	//---------------------------------addons\content_su\sample\template\progress.html
	echo T_("Documentation and examples for using Siftal progress bars.");            // Line 8
	echo T_("Siftal use html progress and meter and have some styles on them, each serving its own semantic purpose");// Line 13
	echo T_("Meter");                                                                 // Line 39
	echo T_("Use the meter element to measure data within a given range");            // Line 40

	//------------------------------------addons\content_su\sample\template\radio.html
	echo T_("Easily use our simple radio");                                           // Line 8
	echo T_("Radio type 1");                                                          // Line 13
	echo T_("Default behaviour");                                                     // Line 16
	echo T_("Male");                                                                  // Line 57
	echo T_("Female");                                                                // Line 61
	echo T_("Other");                                                                 // Line 19
	echo T_("Radio1");                                                                // Line 23
	echo T_("None");                                                                  // Line 34
	echo T_("Colored Radio1");                                                        // Line 39

	//------------------------------------addons\content_su\sample\template\reset.html
	echo T_("CSS Reset");                                                             // Line 7
	echo T_("Reset, a collection of element-specific CSS changes in a single file, kickstart Siftal to provide an elegant, consistent, and simple baseline to build upon.");// Line 8
	echo T_("should have sans-serif font family (opinionated)");                      // Line 13
	echo T_("should have no margin (opinionated)");                                   // Line 19
	echo T_("(there should be no red background visible on this page)");              // Line 21
	echo T_("should render as block");                                                // Line 25
	echo T_("should render as inline-block and baseline-aligned");                    // Line 46
	echo T_("should not display");                                                    // Line 55
	echo T_("dummy anchor");                                                          // Line 72
	echo T_("should not have a focus outline when both focused and hovered (opinionated)");// Line 70
	echo T_("should have a dotted bottom border");                                    // Line 76
	echo T_("should have bold font-weight");                                          // Line 82
	echo T_("should have italic font-style");                                         // Line 89
	echo T_("should not change size within an <code>article</code>");                 // Line 95
	echo T_("Heading (control)");                                                     // Line 104
	echo T_("Heading (in article)");                                                  // Line 99
	echo T_("should not change size within a <code>section</code>");                  // Line 102
	echo T_("Heading (in section)");                                                  // Line 106
	echo T_("h1: Hi Siftal");                                                         // Line 110
	echo T_("h2: Hi Siftal");                                                         // Line 111
	echo T_("h3: Hi Siftal");                                                         // Line 112
	echo T_("h4: Hi Siftal");                                                         // Line 113
	echo T_("h5: Hi Siftal");                                                         // Line 114
	echo T_("h6: Hi Siftal");                                                         // Line 115
	echo T_("should have a yellow background");                                       // Line 118
	echo T_("should render equally small in all browsers");                           // Line 124
	echo T_("should not affect a line's visual line-height");                         // Line 130
	echo T_("should not have a border when wrapped in an anchor");                    // Line 138
	echo T_("should not overflow");                                                   // Line 147
	echo T_("should have margins");                                                   // Line 155
	echo T_("should have a <code>content-box</code> box model");                      // Line 356
	echo T_("should trigger a scrollbar when too wide for its container");            // Line 169
	echo T_(" Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et me.");// Line 171
	echo T_("should render <code>em</code>-unit preformatted text at the same absolute size as normal text");// Line 175
	echo T_("should inherit <code>color</code> from ancestor");                       // Line 185
	echo T_("should inherit <code>font</code> from ancestor");                        // Line 197
	echo T_("should not have margins");                                               // Line 209
	echo T_("should have visible overflow");                                          // Line 236
	echo T_("should not inherit <code>text-transform</code>");                        // Line 253
	echo T_("should have <code>pointer</code> cursor style");                         // Line 260
	echo T_("should be styleable");                                                   // Line 352
	echo T_("should have <code>default</code> cursor style");                         // Line 287
	echo T_("should not have extra inner padding in Firefox");                        // Line 297
	echo T_("should not inherit <code>line-height</code>");                           // Line 315
	echo T_("should have a <code>border-box</code> box model");                       // Line 321
	echo T_("should not have padding");                                               // Line 382
	echo T_("should display a default cursor for the decrement button's click target in Chrome");// Line 346
	echo T_("should not have a cancel button in Safari or Chrome");                   // Line 362
	echo T_("should have consistent border, padding, and margin");                    // Line 368
	echo T_("should inherit color");                                                  // Line 376
	echo T_("should not have a scrollbar unless overflowing");                        // Line 390
	echo T_("should not have spaces between cells");                                  // Line 396

	//-----------------------------------addons\content_su\sample\template\select.html
	echo T_("Select");                                                                // Line 7
	echo T_("Easily change default select style to simple and clean Siftal design");  // Line 8
	echo T_("Sarshomar");                                                             // Line 27
	echo T_("Tejarak");                                                               // Line 28
	echo T_("Azvir");                                                                 // Line 29
	echo T_("Talambar");                                                              // Line 30
	echo T_("Jibres");                                                                // Line 31
	echo T_("Multiple");                                                              // Line 25

	//------------------------------------addons\content_su\sample\template\share.html
	echo T_("Share");                                                                 // Line 7
	echo T_("A complete box of share links to social media");                         // Line 8

	//---------------------------------addons\content_su\sample\template\sortable.html
	echo T_("Sortable");                                                              // Line 7
	echo T_("Allow to easily add sortable to projects");                              // Line 8

	//--------------------------------addons\content_su\sample\template\statistic.html
	echo T_("Statistic");                                                             // Line 7
	echo T_("A statistic emphasizes the current value of an attribute.");             // Line 8
	echo T_("A statistic can display a value with a label above or below it.");       // Line 8
	echo T_("Downloads");                                                             // Line 99
	echo T_("Views");                                                                 // Line 191
	echo T_("A group of statistics");                                                 // Line 32
	echo T_("Faves");                                                                 // Line 37
	echo T_("Members");                                                               // Line 45
	echo T_("A statistic can contain a numeric, icon, image, or text value");         // Line 52
	echo T_("Saves");                                                                 // Line 57
	echo T_("Three");                                                                 // Line 60
	echo T_("Thousand");                                                              // Line 60
	echo T_("Signups");                                                               // Line 61
	echo T_("Flights");                                                               // Line 65
	echo T_("Team Members");                                                          // Line 69
	echo T_("Tasks");                                                                 // Line 103
	echo T_("Olive");                                                                 // Line 126
	echo T_("Teal");                                                                  // Line 134
	echo T_("Violet");                                                                // Line 142
	echo T_("Purple");                                                                // Line 146
	echo T_("Pink");                                                                  // Line 150
	echo T_("Brown");                                                                 // Line 154
	echo T_("Grey");                                                                  // Line 158

	//-------------------------------------addons\content_su\sample\template\step.html
	echo T_("Step");                                                                  // Line 7
	echo T_("A step shows the completion status of an activity in a series of activities");// Line 8

	//------------------------------------addons\content_su\sample\template\table.html
	echo T_("A table's colors can be changed");                                       // Line 32
	echo T_("Similar to colored tables, use one of modifier classes to make rows appear colored.");// Line 79
	echo T_("Add <code class='code1'>.bordered</code> for borders on all sides of the table and cells.");// Line 172
	echo T_("Only add <code class='code1'>.responsive</code> to table.");             // Line 188
	echo T_("A table may sometimes need to be more compact to make more rows visible at a time");// Line 200
	echo T_("A table may sometimes need to be more padded for legibility");           // Line 214
	echo T_("A table may sometimes need to be small");                                // Line 221
	echo T_("A table may sometimes need to be large");                                // Line 228
	echo T_("Add <code class='code1'>data-sort=desc|asc</code> to table header for add icon of sorting");// Line 239
	echo T_("@evazzadeh");                                                            // Line 301
	echo T_("@biqarar");                                                              // Line 311
	echo T_("@baravak");                                                              // Line 321
	echo T_("Git Repository");                                                        // Line 7
	echo T_("node_modules");                                                          // Line 331
	echo T_("Initial commit");                                                        // Line 352
	echo T_("10 hours ago");                                                          // Line 353
	echo T_("test");                                                                  // Line 336
	echo T_("build");                                                                 // Line 341
	echo T_("package.json");                                                          // Line 346
	echo T_("Gruntfile.js");                                                          // Line 351

	//--------------------------------------addons\content_su\sample\template\txt.html
	echo T_("A textarea can be used to allow for extended user input.");              // Line 8
	echo T_("To specify an approximate text area size use the rows attribute.");      // Line 14

	//------------------------------------addons\content_su\sample\template\vcard.html
	echo T_("vcard");                                                                 // Line 7
	echo T_("Siftal's cards provide a flexible and extensible content container with multiple variants and options.");// Line 8
	echo T_("A card is a flexible and extensible content container. It includes options for headers and footers, a wide variety of content, contextual background colors, and powerful display options.");// Line 13
	echo T_("Cards are built with as little markup and styles as possible, but still manage to deliver a ton of control and customization. Built with flexbox, they offer easy alignment and mix well with other  components.");// Line 14
	echo T_("10h");                                                                   // Line 75
	echo T_("5 Comments");                                                            // Line 80
	echo T_("1k likes");                                                              // Line 81
	echo T_("Cards are designed to be flexible to your content. content blocks can include any custom elements related to your content.");// Line 92
	echo T_("Accept");                                                                // Line 138
	echo T_("A card can contain a header.");                                          // Line 146
	echo T_("Friend");                                                                // Line 173
	echo T_("Javad is a CEO and founder of Ermile and start developing Siftal from 2017 and hope to write documentaion for it!");// Line 157
	echo T_("Reza Mohiti");                                                           // Line 13 Seperate
	echo T_("Reza is a back-end developer of Ermile.");                               // Line 166
	echo T_("Hasan Salehi");                                                          // Line 11 Seperate
	echo T_("Hasan is a full-stack developer of Ermile and always trying to be in classrooms!");// Line 178
	echo T_("A card can contain content metadata.");                                  // Line 264
	echo T_("Reza Motiti");                                                           // Line 275
	echo T_("6 days ago");                                                            // Line 197
	echo T_("Haram");                                                                 // Line 197
	echo T_("10 days ago");                                                           // Line 204
	echo T_("School");                                                                // Line 204
	echo T_("A card can be formatted so that the entire contents link to another page. Also a card can contain contain links as images, headers, or inside content.");// Line 213
	echo T_("Center Card");                                                           // Line 240
	echo T_("A card can center itself inside its container.");                        // Line 241
	echo T_("A card can specify a color.");                                           // Line 251
	echo T_("A card can be used in many sizes");                                      // Line 292
	echo T_("Mini");                                                                  // Line 293
	echo T_("Tiny");                                                                  // Line 308
	echo T_("Small");                                                                 // Line 322
	echo T_("Large");                                                                 // Line 339
	echo T_("Big");                                                                   // Line 342
	echo T_("Huge");                                                                  // Line 345
	echo T_("Massive");                                                               // Line 348
	echo T_("Live Card");                                                             // Line 353
	echo T_("A card can be used in live with on and off status");                     // Line 354
	echo T_("Add new");                                                               // Line 6

	//---------------------------------------addons\content_su\sendnotify\display.html
	echo T_("Send every notification from every way to user");                        // Line 6
	echo T_("Mobile or user_id");                                                     // Line 12
	echo T_("Find Connection way");                                                   // Line 14
	echo T_("Inner system notification");                                             // Line 42
	echo T_("What do you want to send to this user?");                                // Line 59
	echo T_("Send");                                                                  // Line 63

	//-------------------------------------------addons\content_su\server\display.html
	echo T_("Show $_SERVER");                                                         // Line 6

	//------------------------------------------addons\content_su\session\display.html

	//-----------------------------------------addons\content_su\shorturl\display.html
	echo T_("Test shortURL function");                                                // Line 6
	echo T_("String or Number");                                                      // Line 12
	echo T_("Run");                                                                   // Line 15
	echo T_("Encode");                                                                // Line 24
	echo T_("Decode");                                                                // Line 28

	//--------------------------------------------addons\content_su\tools\display.html
	echo T_("You can use our tools");                                                 // Line 5
	echo T_("If you dont know about this page, leave it!");                           // Line 5
	echo T_("Special tools");                                                         // Line 9
	echo T_("Backup");                                                                // Line 37
	echo T_("Sitemap");                                                               // Line 12
	echo T_("Server information");                                                    // Line 13
	echo T_("Log");                                                                   // Line 14
	echo T_("Translation tools");                                                     // Line 16
	echo T_("Update");                                                                // Line 152 Seperate

	//---------------------------------------addons\content_su\tools\info\display.html
	echo T_("Show server info");                                                      // Line 9
	echo T_("Show PHP info");                                                         // Line 10

	//----------------------------------------addons\content_su\tools\log\display.html
	echo T_("Server Logs");                                                           // Line 7
	echo T_("Access logs");                                                           // Line 9
	echo T_("Error logs");                                                            // Line 10
	echo T_("Database Logs");                                                         // Line 15
	echo T_("Logs - check");                                                          // Line 18
	echo T_("Logs - warn");                                                           // Line 19
	echo T_("Logs - critical");                                                       // Line 20
	echo T_("Error Logs");                                                            // Line 21
	echo T_("Cronjob log");                                                           // Line 26
	echo T_("Cronjob Logs");                                                          // Line 28
	echo T_("Telegram Errors");                                                       // Line 34
	echo T_("telegram Logs");                                                         // Line 37
	echo T_("telegram - Error Logs");                                                 // Line 38

	//------------------------------------addons\content_su\tools\sitemap\display.html
	echo T_("Create sitemap automatically by click on this page");                    // Line 6
	echo T_("Base Sitemap");                                                          // Line 8
	echo T_("Sitemap Detail");                                                        // Line 9
	echo T_("Create it Again");                                                       // Line 10
	echo T_("Create Sitemap Result");                                                 // Line 18

	//--------------------------------addons\content_su\tools\translation\display.html
	echo T_("Translate");                                                             // Line 7
	echo T_("Extract twig trans func in current project");                            // Line 9
	echo T_("Extract twig trans func in dash addons");                                // Line 11
	echo T_("Extract twig trans func in dash addons and update on dash addons");      // Line 12

	//-------------------------------------addons\content_su\tools\update\display.html
	echo T_("Ermile Repository");                                                     // Line 9
	echo T_("Dash Repository");                                                       // Line 11
	echo T_("Current Project Repository");                                            // Line 12
	echo T_("All: Dash + current project Repository");                                // Line 13
	echo T_("Database");                                                              // Line 20
	echo T_("Upgrade");                                                               // Line 35
	echo T_("Backup by dump");                                                        // Line 29
	echo T_("Submit");                                                                // Line 202
	echo T_("Project Database");                                                      // Line 37
	echo T_("Automatically read database and create sql files");                      // Line 36

	//---------------------------------addons\content_su\transactions\add\display.html
	echo T_("type");                                                                  // Line 16
	echo T_("Please select one item");                                                // Line 28
	echo T_("Money");                                                                 // Line 19
	echo T_("Gift");                                                                  // Line 20
	echo T_("Transfer");                                                              // Line 21
	echo T_("Prize");                                                                 // Line 22
	echo T_("Unit");                                                                  // Line 26
	echo T_("Mobile");                                                                // Line 168 Seperate
	echo T_("Minus");                                                                 // Line 59
	echo T_("Plus");                                                                  // Line 58

	//-------------------------------------addons\content_su\transactions\display.html
	echo T_("Search in :transactionss");                                              // Line 41
	echo T_("User");                                                                  // Line 54
	echo T_("Budget before");                                                         // Line 60
	echo T_("Budget");                                                                // Line 61
	echo T_("Condition");                                                             // Line 63
	echo T_("Verify");                                                                // Line 64
	echo T_("Try to start with add new :transactions!");                              // Line 110

	//----------------------------------------addons\content_su\users\add\display.html
	echo T_("Add new user");                                                          // Line 6

	//-------------------------------------addons\content_su\users\detail\display.html
	echo T_("User detail");                                                           // Line 6
	echo T_("Key");                                                                   // Line 115 Seperate

	//--------------------------------------------addons\content_su\users\display.html
	echo T_("Users list");                                                            // Line 6
	echo T_("Parent");                                                                // Line 26
	echo T_("Avatar");                                                                // Line 28
	echo T_("More");                                                                  // Line 29
	echo T_("Permission");                                                            // Line 33

	//---------------------------------------addons\content_su\users\edit\display.html
	echo T_("Edit user detail");                                                      // Line 6
	echo T_("Enter a valid name from 3 to 40 character");                             // Line 17
	echo T_("Last name");                                                             // Line 22
	echo T_("allowed extentions jpg, png (gif for bussiness plans). Max 500Kb");      // Line 27
	echo T_("National code");                                                         // Line 41
	echo T_("Father name");                                                           // Line 46
	echo T_("Birthday");                                                              // Line 51
	echo T_("Marital");                                                               // Line 64
	echo T_("Single");                                                                // Line 67
	echo T_("Married");                                                               // Line 71
	echo T_("Child count");                                                           // Line 76
	echo T_("Birth city");                                                            // Line 81
	echo T_("Sh from");                                                               // Line 87
	echo T_("Sh code");                                                               // Line 92
	echo T_("Last education");                                                        // Line 97
	echo T_("Job");                                                                   // Line 102
	echo T_("Pasport code");                                                          // Line 107
	echo T_("Pasport expire");                                                        // Line 112
	echo T_("Bank account number");                                                   // Line 117
	echo T_("Last education degree");                                                 // Line 122

	//------------------------------------------addons\includes\html\display-dash.html
	echo T_("Edit your profile");                                                     // Line 50
	echo T_("Avatar of you");                                                         // Line 52
	echo T_("Default Avatar");                                                        // Line 54
	echo T_("Hello");                                                                 // Line 60
	echo T_("View website");                                                          // Line 77
	echo T_("Work in your language");                                                 // Line 81
	echo T_("Logout");                                                                // Line 104 Seperate
	echo T_("View your current location and navigate to parent of it");               // Line 98

	//----------------------------------addons\includes\html\display-enter-blocks.html
	echo T_("Please enter valid mobile number");                                      // Line 12
	echo T_("Enter correct iranian mobile from 10 to 14 character");                  // Line 12
	echo T_("7 to 15 characters is allowed for mobile");                              // Line 12
	echo T_("Username or Mobile or email");                                           // Line 20
	echo T_("Username or Mobile or Email");                                           // Line 20
	echo T_("Please enter valid mobile or username or email number");                 // Line 20
	echo T_("Password");                                                              // Line 169 Seperate
	echo T_("Enter a valid password from 6 to 40 character");                         // Line 47
	echo T_("New Password");                                                          // Line 341 Seperate
	echo T_("Password?");                                                             // Line 56
	echo T_("Verify Code");                                                           // Line 65
	echo T_("Enter a valid code!");                                                   // Line 65
	echo T_("Send this code to our number!");                                         // Line 73
	echo T_("send to this number");                                                   // Line 80
	echo T_("Send code to this number!");                                             // Line 80
	echo T_("Full name");                                                             // Line 94
	echo T_("Enter a valid eamil!");                                                  // Line 350
	echo T_("username");                                                              // Line 109
	echo T_("Enter a valid username from 4 to 50 character");                         // Line 109
	echo T_("Go and check it");                                                       // Line 122
	echo T_("Login");                                                                 // Line 172 Seperate
	echo T_("Create Account");                                                        // Line 159
	echo T_("Signup");                                                                // Line 166
	echo T_("Set Password");                                                          // Line 173
	echo T_("Recovery password");                                                     // Line 180
	echo T_("Enter");                                                                 // Line 194
	echo T_("Enter with another methods");                                            // Line 213
	echo T_("Log in with mobile");                                                    // Line 229
	echo T_("Enter with mobile");                                                     // Line 231
	echo T_("Enter with Google");                                                     // Line 241
	echo T_("Enter with email");                                                      // Line 249
	echo T_("Enter with username");                                                   // Line 258
	echo T_("Resend code");                                                           // Line 330
	echo T_("After end timer you can request code again");                            // Line 337
	echo T_("Another way?");                                                          // Line 337
	echo T_("Restart with new mobile");                                               // Line 343
	echo T_("New email");                                                             // Line 350
	echo T_("New username");                                                          // Line 358
	echo T_("Enter a valid username!");                                               // Line 358

	//-------------------------------------------addons\includes\html\display-mvc.html

	//-------------------------------------addons\includes\languages\trans_static.html
	echo T_("Dash");                                                                  // Line 7 Seperate
	echo T_("dash");                                                                  // Line 8 Seperate
	echo T_("Powered by Dash");                                                       // Line 9 Seperate
	echo T_("Ahmad Karimi");                                                          // Line 12 Seperate
	echo T_("Another Project with Dash");                                             // Line 14 Seperate
	echo T_("Dash is an artichokes for PHP programming!!");                           // Line 15 Seperate
	echo T_("Dash is powerfull.");                                                    // Line 16 Seperate
	echo T_("Insert Successfully");                                                   // Line 17 Seperate
	echo T_("Insert Failed!");                                                        // Line 18 Seperate
	echo T_("Update Successfully");                                                   // Line 19 Seperate
	echo T_("Update Failed!");                                                        // Line 20 Seperate
	echo T_("Delete Successfully");                                                   // Line 21 Seperate
	echo T_("Delete Failed!");                                                        // Line 22 Seperate
	echo T_("Transaction error");                                                     // Line 23 Seperate
	echo T_("Transaction Error");                                                     // Line 24 Seperate
	echo T_("year");                                                                  // Line 29 Seperate
	echo T_("month");                                                                 // Line 30 Seperate
	echo T_("week");                                                                  // Line 31 Seperate
	echo T_("day");                                                                   // Line 32 Seperate
	echo T_("minute");                                                                // Line 34 Seperate
	echo T_("second");                                                                // Line 35 Seperate
	echo T_("ago");                                                                   // Line 36 Seperate
	echo T_(",");                                                                     // Line 37 Seperate
	echo T_(" ,");                                                                    // Line 38 Seperate
	echo T_(", ");                                                                    // Line 39 Seperate
	echo T_("s ");                                                                    // Line 40 Seperate
	echo T_("A few seconds ago");                                                     // Line 41 Seperate
	echo T_("item");                                                                  // Line 44 Seperate
	echo T_("empty");                                                                 // Line 45 Seperate
	echo T_("NaN");                                                                   // Line 46 Seperate
	echo T_("Byte");                                                                  // Line 47 Seperate
	echo T_("KB");                                                                    // Line 48 Seperate
	echo T_("MB");                                                                    // Line 49 Seperate
	echo T_("GB");                                                                    // Line 50 Seperate
	echo T_("TB");                                                                    // Line 51 Seperate
	echo T_("PB");                                                                    // Line 52 Seperate
	echo T_("id does not exist!");                                                    // Line 55 Seperate
	echo T_("all require fields must fill");                                          // Line 56 Seperate
	echo T_("some fields must be change for update!");                                // Line 57 Seperate
	echo T_("ermile");                                                                // Line 59 Seperate
	echo T_("Made in IRAN");                                                          // Line 60 Seperate
	echo T_("Iran");                                                                  // Line 61 Seperate
	echo T_("iran");                                                                  // Line 62 Seperate
	echo T_("qom");                                                                   // Line 423 Seperate
	echo T_("submit");                                                                // Line 65 Seperate
	echo T_("save");                                                                  // Line 66 Seperate
	echo T_("add new");                                                               // Line 67 Seperate
	echo T_("signin");                                                                // Line 68 Seperate
	echo T_("sign in");                                                               // Line 69 Seperate
	echo T_("signup");                                                                // Line 70 Seperate
	echo T_("sign up");                                                               // Line 71 Seperate
	echo T_("register");                                                              // Line 72 Seperate
	echo T_("home");                                                                  // Line 73 Seperate
	echo T_("Home");                                                                  // Line 74 Seperate
	echo T_("homepage");                                                              // Line 75 Seperate
	echo T_("Homepage");                                                              // Line 76 Seperate
	echo T_("admin");                                                                 // Line 157 Seperate
	echo T_("cp");                                                                    // Line 80 Seperate
	echo T_("Cp");                                                                    // Line 81 Seperate
	echo T_("account");                                                               // Line 82 Seperate
	echo T_("SiteContent");                                                           // Line 83 Seperate
	echo T_("Back to");                                                               // Line 85 Seperate
	echo T_("Actions");                                                               // Line 86 Seperate
	echo T_("Add New Record");                                                        // Line 87 Seperate
	echo T_("delete record");                                                         // Line 88 Seperate
	echo T_("seriously, are you sure? There's no coming back.");                      // Line 89 Seperate
	echo T_("or");                                                                    // Line 91 Seperate
	echo T_("Delete");                                                                // Line 92 Seperate
	echo T_("Terms");                                                                 // Line 96 Seperate
	echo T_("Attachments");                                                           // Line 97 Seperate
	echo T_("Visitors");                                                              // Line 99 Seperate
	echo T_("My Profile");                                                            // Line 101 Seperate
	echo T_("Lock Screen");                                                           // Line 103 Seperate
	echo T_("Powered by Dash.");                                                      // Line 105 Seperate
	echo T_("Powered by Ermile.");                                                    // Line 106 Seperate
	echo T_("All right reserved.");                                                   // Line 107 Seperate
	echo T_("Comming Soon");                                                          // Line 109 Seperate
	echo T_("Fantastic");                                                             // Line 110 Seperate
	echo T_("Copy");                                                                  // Line 111 Seperate
	echo T_("Cut");                                                                   // Line 113 Seperate
	echo T_("Successfully");                                                          // Line 114 Seperate
	echo T_("Login Successfully");                                                    // Line 119 Seperate
	echo T_("Login failed!");                                                         // Line 120 Seperate
	echo T_("Mobile or password is incorrect");                                       // Line 125 Seperate
	echo T_("Please forward this message to administrator");                          // Line 321 Seperate
	echo T_("Please enter title");                                                    // Line 127 Seperate
	echo T_("Assign keywords to your posts using tags");                              // Line 128 Seperate
	echo T_("Use categories to define sections of your site and group related posts");// Line 129 Seperate
	echo T_("Use categories to define sections of your site and group related files");// Line 130 Seperate
	echo T_("Use posts to share your news in specefic category");                     // Line 131 Seperate
	echo T_("Use pages to share your static content");                                // Line 132 Seperate
	echo T_("Upload your media");                                                     // Line 133 Seperate
	echo T_("page");                                                                  // Line 134 Seperate
	echo T_("If you want to change password enter it, else leave it blank");          // Line 135 Seperate
	echo T_("Enter password within 5 to 40 character");                               // Line 136 Seperate
	echo T_("post");                                                                  // Line 137 Seperate
	echo T_("tag");                                                                   // Line 138 Seperate
	echo T_("filecategory");                                                          // Line 140 Seperate
	echo T_("File category");                                                         // Line 141 Seperate
	echo T_("File Category");                                                         // Line 142 Seperate
	echo T_("Filecategories");                                                        // Line 143 Seperate
	echo T_("attachment");                                                            // Line 144 Seperate
	echo T_("option");                                                                // Line 145 Seperate
	echo T_("search");                                                                // Line 146 Seperate
	echo T_("upload");                                                                // Line 147 Seperate
	echo T_("View");                                                                  // Line 148 Seperate
	echo T_("visitor");                                                               // Line 153 Seperate
	echo T_("Editor");                                                                // Line 154 Seperate
	echo T_("editor");                                                                // Line 155 Seperate
	echo T_("Admin");                                                                 // Line 156 Seperate
	echo T_("Administrator");                                                         // Line 158 Seperate
	echo T_("Writer");                                                                // Line 159 Seperate
	echo T_("utility");                                                               // Line 160 Seperate
	echo T_("Utility");                                                               // Line 161 Seperate
	echo T_("tools");                                                                 // Line 163 Seperate
	echo T_("tool");                                                                  // Line 164 Seperate
	echo T_("Chart must be contain at least 2 column!");                              // Line 165 Seperate
	echo T_("Data not exist!");                                                       // Line 166 Seperate
	echo T_("between 5-40 character");                                                // Line 170 Seperate
	echo T_("between 5-40 character. be tricky!");                                    // Line 171 Seperate
	echo T_("Create an account");                                                     // Line 173 Seperate
	echo T_("Change password");                                                       // Line 174 Seperate
	echo T_("SMS Delivery");                                                          // Line 175 Seperate
	echo T_("SMS Callback");                                                          // Line 176 Seperate
	echo T_("edit");                                                                  // Line 178 Seperate
	echo T_("book");                                                                  // Line 179 Seperate
	echo T_("books");                                                                 // Line 180 Seperate
	echo T_("Book Categories");                                                       // Line 181 Seperate
	echo T_("Bookcategories");                                                        // Line 182 Seperate
	echo T_("bookcategory");                                                          // Line 183 Seperate
	echo T_("Use categories to define sections of your site and group related books");// Line 184 Seperate
	echo T_("Use book to define important parts to use in posts");                    // Line 185 Seperate
	echo T_("Duplicate - File exist");                                                // Line 186 Seperate
	echo T_("Fail on tranfering file");                                               // Line 187 Seperate
	echo T_("Invalid parameters");                                                    // Line 189 Seperate
	echo T_("No file sent");                                                          // Line 190 Seperate
	echo T_("Exceeded filesize limit");                                               // Line 191 Seperate
	echo T_("Unknown errors");                                                        // Line 192 Seperate
	echo T_("We don't support this type of file");                                    // Line 193 Seperate
	echo T_("Publish new post in social networks");                                   // Line 195 Seperate
	echo T_("Socialnetwork");                                                         // Line 196 Seperate
	echo T_("socialnetwork");                                                         // Line 197 Seperate
	echo T_("Page Views");                                                            // Line 198 Seperate
	echo T_("Size");                                                                  // Line 202 Seperate
	echo T_("Ext");                                                                   // Line 203 Seperate
	echo T_("pages");                                                                 // Line 205 Seperate
	echo T_("tags");                                                                  // Line 206 Seperate
	echo T_("categories");                                                            // Line 207 Seperate
	echo T_("filecategories");                                                        // Line 208 Seperate
	echo T_("bookcategories");                                                        // Line 209 Seperate
	echo T_("permissions");                                                           // Line 210 Seperate
	echo T_("Permissions");                                                           // Line 211 Seperate
	echo T_("logout");                                                                // Line 212 Seperate
	echo T_("lock");                                                                  // Line 213 Seperate
	echo T_("profile");                                                               // Line 214 Seperate
	echo T_("You can't view this part of system");                                    // Line 219 Seperate
	echo T_("You can't add new");                                                     // Line 220 Seperate
	echo T_("you can't edit");                                                        // Line 221 Seperate
	echo T_("You can't delete");                                                      // Line 222 Seperate
	echo T_("You can't access to this part of system");                               // Line 223 Seperate
	echo T_("Because of your permission");                                            // Line 224 Seperate
	echo T_("You can't access to this page!");                                        // Line 225 Seperate
	echo T_("Site");                                                                  // Line 229 Seperate
	echo T_("enable");                                                                // Line 231 Seperate
	echo T_("disable");                                                               // Line 232 Seperate
	echo T_("For multilanguage sites enter title in English and translate it");       // Line 233 Seperate
	echo T_("main URL");                                                              // Line 237 Seperate
	echo T_("Enable coming soon");                                                    // Line 238 Seperate
	echo T_("debug mode status");                                                     // Line 239 Seperate
	echo T_("Save as cookie");                                                        // Line 240 Seperate
	echo T_("Log visitors");                                                          // Line 241 Seperate
	echo T_("Use main account");                                                      // Line 242 Seperate
	echo T_("Main account");                                                          // Line 243 Seperate
	echo T_("Default Language");                                                      // Line 244 Seperate
	echo T_("Feature status");                                                        // Line 245 Seperate
	echo T_("Use fake subdomain");                                                    // Line 246 Seperate
	echo T_("Use SMS service");                                                       // Line 247 Seperate
	echo T_("Use social networks");                                                   // Line 248 Seperate
	echo T_("Use account");                                                           // Line 249 Seperate
	echo T_("line number");                                                           // Line 253 Seperate
	echo T_("apikey");                                                                // Line 254 Seperate
	echo T_("Github");                                                                // Line 255 Seperate
	echo T_("Linkedin");                                                              // Line 256 Seperate
	echo T_("Aparat");                                                                // Line 257 Seperate
	echo T_("Google Plus");                                                           // Line 258 Seperate
	echo T_("Status of sms service");                                                 // Line 259 Seperate
	echo T_("Kavenegar");                                                             // Line 260 Seperate
	echo T_("SMS service");                                                           // Line 261 Seperate
	echo T_("service");                                                               // Line 262 Seperate
	echo T_("ConsumerSecret");                                                        // Line 263 Seperate
	echo T_("AccessToken");                                                           // Line 264 Seperate
	echo T_("AccessTokenSecret");                                                     // Line 265 Seperate
	echo T_("app_id");                                                                // Line 266 Seperate
	echo T_("app_secret");                                                            // Line 267 Seperate
	echo T_("redirect_url");                                                          // Line 268 Seperate
	echo T_("required_scope");                                                        // Line 269 Seperate
	echo T_("page_id");                                                               // Line 270 Seperate
	echo T_("access_token");                                                          // Line 271 Seperate
	echo T_("client_token");                                                          // Line 272 Seperate
	echo T_("Send message for");                                                      // Line 273 Seperate
	echo T_("verification");                                                          // Line 274 Seperate
	echo T_("recovery");                                                              // Line 275 Seperate
	echo T_("changepass");                                                            // Line 276 Seperate
	echo T_("Regional restriction");                                                  // Line 277 Seperate
	echo T_("Message header");                                                        // Line 278 Seperate
	echo T_("Message footer");                                                        // Line 279 Seperate
	echo T_("Force one message");                                                     // Line 280 Seperate
	echo T_("We can't give service to this number");                                  // Line 281 Seperate
	echo T_("Simulate SMS (Debugging)");                                              // Line 282 Seperate
	echo T_("Please set apikey and linenumber");                                      // Line 283 Seperate
	echo T_("send");                                                                  // Line 284 Seperate
	echo T_(" to ");                                                                  // Line 285 Seperate
	echo T_("until");                                                                 // Line 286 Seperate
	echo T_("Recovery account");                                                      // Line 287 Seperate
	echo T_("Send message in custom situation");                                      // Line 288 Seperate
	echo T_("Message detail");                                                        // Line 289 Seperate
	echo T_("SMS api detail");                                                        // Line 290 Seperate
	echo T_("Status of twitter sharing");                                             // Line 291 Seperate
	echo T_("Status of facebook sharing");                                            // Line 292 Seperate
	echo T_("Status of telegram sharing");                                            // Line 293 Seperate
	echo T_("Allow registration");                                                    // Line 297 Seperate
	echo T_("After login redirect to");                                               // Line 298 Seperate
	echo T_("Default permission");                                                    // Line 299 Seperate
	echo T_("Account Status");                                                        // Line 300 Seperate
	echo T_("Access with pass phrase");                                               // Line 301 Seperate
	echo T_("Pass phrase key");                                                       // Line 302 Seperate
	echo T_("Pass phrase value");                                                     // Line 303 Seperate
	echo T_("Allow recovery account");                                                // Line 304 Seperate
	echo T_("Status of account service");                                             // Line 305 Seperate
	echo T_("Increase account security");                                             // Line 306 Seperate
	echo T_("Signup Settings");                                                       // Line 307 Seperate
	echo T_("Enter your registered mobile");                                          // Line 314 Seperate
	echo T_("Enter your password");                                                   // Line 315 Seperate
	echo T_("Mobile number exist!");                                                  // Line 318 Seperate
	echo T_("Register successfully");                                                 // Line 319 Seperate
	echo T_("Register failed!");                                                      // Line 320 Seperate
	echo T_("Recovery");                                                              // Line 324 Seperate
	echo T_("your recovery code is");                                                 // Line 325 Seperate
	echo T_("recovery failed!");                                                      // Line 326 Seperate
	echo T_("Mobile number is incorrect");                                            // Line 327 Seperate
	echo T_("Verificate");                                                            // Line 330 Seperate
	echo T_("Verification");                                                          // Line 331 Seperate
	echo T_("verify successfully.");                                                  // Line 332 Seperate
	echo T_("please Input your new password");                                        // Line 333 Seperate
	echo T_("verify failed!");                                                        // Line 334 Seperate
	echo T_("this data is incorrect");                                                // Line 335 Seperate
	echo T_("Check your mobile and enter the code");                                  // Line 336 Seperate
	echo T_("Change Password");                                                       // Line 339 Seperate
	echo T_("Current Password");                                                      // Line 340 Seperate
	echo T_("Change it");                                                             // Line 342 Seperate
	echo T_("change password successfully");                                          // Line 343 Seperate
	echo T_("change password failed!");                                               // Line 344 Seperate
	echo T_("Windows");                                                               // Line 347 Seperate
	echo T_("Linux");                                                                 // Line 348 Seperate
	echo T_("Mac");                                                                   // Line 349 Seperate
	echo T_("Chrome");                                                                // Line 350 Seperate
	echo T_("Gecko");                                                                 // Line 351 Seperate
	echo T_("First you must enter name of permission");                               // Line 355 Seperate
	echo T_("This permission name exist!");                                           // Line 356 Seperate
	echo T_("You can edit this permission");                                          // Line 357 Seperate
	echo T_("Define or edit user permissions to allow or block access to special pages");// Line 358 Seperate
	echo T_("You are editing permission");                                            // Line 359 Seperate
	echo T_("We send a verification code for you");                                   // Line 363 Seperate
	echo T_("We send a verification code to this number");                            // Line 364 Seperate
	echo T_("You account is verified successfully");                                  // Line 365 Seperate
	echo T_("Your verification code is");                                             // Line 366 Seperate
	echo T_("Your password is changed successfully");                                 // Line 367 Seperate
	echo T_("Now we only support IRAN!");                                             // Line 368 Seperate
	echo T_("Thanks for using our service");                                          // Line 370 Seperate
	echo T_("Dear user");                                                             // Line 375 Seperate
	echo T_("For using this service we need to register your phone number.");         // Line 376 Seperate
	echo T_("Please send your number with below keyboard to complete registeration.");// Line 377 Seperate
	echo T_("Dear friend");                                                           // Line 378 Seperate
	echo T_("We need your phone number to verifying your account.");                  // Line 379 Seperate
	echo T_("If you dont want share your number, we cant presenting our services to you!");// Line 380 Seperate
	echo T_("Registering user is successful.");                                       // Line 381 Seperate
	echo T_("Cancel registration and return to main menu");                           // Line 382 Seperate
	echo T_("Please only use below keyboard");                                        // Line 383 Seperate
	echo T_("We need your contact!");                                                 // Line 384 Seperate
	echo T_("Register User 📱");                                                       // Line 387 Seperate
	echo T_("Register User");                                                         // Line 388 Seperate
	echo T_("Return");                                                                // Line 389 Seperate
	echo T_("Register Mobile Number 📱");                                              // Line 390 Seperate
	echo T_("Register Mobile Number");                                                // Line 391 Seperate
	echo T_("Register Address");                                                      // Line 392 Seperate
	echo T_("By completing your profile, help us to present better service.");        // Line 393 Seperate
	echo T_("We will thank you for this.");                                           // Line 394 Seperate
	echo T_("Your phone number registered successfully;)");                           // Line 396 Seperate
	echo T_("We dont need another users contact:?)");                                 // Line 397 Seperate
	echo T_("We need mobile number!");                                                // Line 398 Seperate
	echo T_(" ");                                                                     // Line 400 Seperate
	echo T_("east azerbaijan");                                                       // Line 404 Seperate
	echo T_("west azerbaijan");                                                       // Line 405 Seperate
	echo T_("ardabil");                                                               // Line 406 Seperate
	echo T_("esfahan");                                                               // Line 407 Seperate
	echo T_("alborz");                                                                // Line 408 Seperate
	echo T_("eilam");                                                                 // Line 409 Seperate
	echo T_("bushehr");                                                               // Line 410 Seperate
	echo T_("tehran");                                                                // Line 411 Seperate
	echo T_("Asia/Tehran");                                                           // Line 412 Seperate
	echo T_("chaharmahal and bakhtiari");                                             // Line 413 Seperate
	echo T_("south khorasan");                                                        // Line 414 Seperate
	echo T_("razavi khorasan");                                                       // Line 415 Seperate
	echo T_("north khorasan");                                                        // Line 416 Seperate
	echo T_("khuzestan");                                                             // Line 417 Seperate
	echo T_("zanjan");                                                                // Line 418 Seperate
	echo T_("semnan");                                                                // Line 419 Seperate
	echo T_("sistan and baluchestan");                                                // Line 420 Seperate
	echo T_("fars");                                                                  // Line 421 Seperate
	echo T_("qazvin");                                                                // Line 422 Seperate
	echo T_("kordestan");                                                             // Line 424 Seperate
	echo T_("kerman");                                                                // Line 425 Seperate
	echo T_("kermanshah");                                                            // Line 426 Seperate
	echo T_("kohgiluyeh and boyerahmad");                                             // Line 427 Seperate
	echo T_("golestan");                                                              // Line 428 Seperate
	echo T_("gilan");                                                                 // Line 429 Seperate
	echo T_("lorestan");                                                              // Line 430 Seperate
	echo T_("mazandaran");                                                            // Line 431 Seperate
	echo T_("markazi");                                                               // Line 432 Seperate
	echo T_("hormozgan");                                                             // Line 433 Seperate
	echo T_("hamedan");                                                               // Line 434 Seperate
	echo T_("yazd");                                                                  // Line 435 Seperate
	echo T_("Saderat");                                                               // Line 439 Seperate
	echo T_("Mellat");                                                                // Line 440 Seperate
	echo T_("Tejarat");                                                               // Line 441 Seperate
	echo T_("Melli");                                                                 // Line 442 Seperate
	echo T_("Sepah");                                                                 // Line 443 Seperate
	echo T_("Keshavarzi");                                                            // Line 444 Seperate
	echo T_("Maskan");                                                                // Line 445 Seperate
	echo T_("Refah");                                                                 // Line 446 Seperate
	echo T_("Novin");                                                                 // Line 447 Seperate
	echo T_("Ansar");                                                                 // Line 448 Seperate
	echo T_("Pasargad");                                                              // Line 449 Seperate
	echo T_("Saman");                                                                 // Line 450 Seperate
	echo T_("Sina");                                                                  // Line 451 Seperate
	echo T_("Post");                                                                  // Line 452 Seperate
	echo T_("Ghavamin");                                                              // Line 453 Seperate
	echo T_("Taavon");                                                                // Line 454 Seperate
	echo T_("Shahr");                                                                 // Line 455 Seperate
	echo T_("Ayande");                                                                // Line 456 Seperate
	echo T_("Sarmayeh");                                                              // Line 457 Seperate
	echo T_("Hekmat");                                                                // Line 459 Seperate
	echo T_("Iranzamin");                                                             // Line 460 Seperate
	echo T_("Karafarin");                                                             // Line 461 Seperate
	echo T_("Gardeshgari");                                                           // Line 462 Seperate
	echo T_("Madan");                                                                 // Line 463 Seperate
	echo T_("Tsaderat");                                                              // Line 464 Seperate
	echo T_("Khavarmiyane");                                                          // Line 465 Seperate
	echo T_("Ivbb");                                                                  // Line 466 Seperate
	echo T_("Irkish");                                                                // Line 467 Seperate
	echo T_("Asanpardakht");                                                          // Line 468 Seperate
	echo T_("Zarinpal");                                                              // Line 469 Seperate
	echo T_("Payir");                                                                 // Line 470 Seperate

 }
}
?>