<?php
use App\Questions;
use App\User;
use Illuminate\Database\Seeder;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        ////////////Nursing///////////////////


        Questions::create(
            [
                'type'=>'Nursing',
                'body'=>'Have you ever cured someone"s wound?',
                'collage_id'=>'8'
            ]
        );

        Questions::create(
            [
                'type'=>'Nursing',
                'body'=>'Have you ever taken a first aid course?',
                'collage_id'=>'8'
            ]
        );
        Questions::create(
            [
                'type'=>'Nursing',
                'body'=>'Do you know how to prepare and use needles?',
                'collage_id'=>'8'
            ]
        );

        Questions::create(
            [
                'type'=>'Nursing',
                'body'=>'What do you do if someone gets some burns?',
                'collage_id'=>'8'
            ]
        );

        Questions::create(
            [
                'type'=>'Nursing',
                'body'=>'Are you interested in helping patients?',
                'collage_id'=>'8'
            ]
        );



//////////////////Physical Therapy/////////////////////////////

        Questions::create(
            [
                'type'=>'Physical Therapy',
                'body'=>'Have you ever experienced physical therapy because of an injury you had?',
                'collage_id'=>'1'
            ]
        );

        Questions::create(
            [
                'type'=>'Physical Therapy',
                'body'=>'Are you interested in physical therapy?',
                'collage_id'=>'1'
            ]
        );
        Questions::create(
            [
                'type'=>'Physical Therapy',
                'body'=>'How many bones in the human body?',
                'collage_id'=>'1'
            ]
        );

        Questions::create(
            [
                'type'=>'Physical Therapy',
                'body'=>'What is the first thing you should do if someone broke one of his bones?',
                'collage_id'=>'1'
            ]
        );

        Questions::create(
            [
                'type'=>'Physical Therapy',
                'body'=>'Do you believe in the importance of physical therapy?',
                'collage_id'=>'1'
            ]
        );



////////////////Engineering////////////////////

        
        Questions::create(
            [
                'type'=>'Engineering',   
                'body'=>'State the formula for the area of a parallelogram.',
                'collage_id'=>'2'
            ]
        );

        Questions::create(
            [
                'type'=>'Engineering', 
                'body'=>'Are you interested in engineering chemistry?',
                'collage_id'=>'2'
            ]
        );
        Questions::create(
            [
                'type'=>'Engineering', 
                'body'=>'Is density directly proportional to the body"s mass?',
                'collage_id'=>'2'
            ]
        );

        Questions::create(
            [
                'type'=>'Engineering', 
                'body'=>' Have you ever worked on a handmade project?',
                'collage_id'=>'2'
            ]
        );

        Questions::create(
            [
                'type'=>'Engineering', 
                'body'=>'Are you interested in hardware?',
                'collage_id'=>'2'
            ]
        );




/////////////Medicine//////////////////////
        
        
        Questions::create(
            [
                'type'=>'Medicine', 
                'body'=>'Are you afraid to see blood?',
                'collage_id'=>'3'
            ]
        );

        Questions::create(
            [
                'type'=>'Medicine',
                'body'=>'What is the normal pulse rate for humans?',
                'collage_id'=>'3'
            ]
        );
        Questions::create(
            [
                'type'=>'Medicine',
                'body'=>'Are you interested in biology?',
                'collage_id'=>'3'
            ]
        );

        Questions::create(
            [
                'type'=>'Medicine',
                'body'=>'Are you interested in mental therapy?',
                'collage_id'=>'3'
            ]
        );

        Questions::create(
            [
                'type'=>'Medicine',
                'body'=>'How many liters of blood in the human body?',
                'collage_id'=>'3'
            ]
        );

////////////////Computer and Information////////////////////////

        Questions::create(
            [
                'type'=>'Computer and Information',
                'body'=>' Have you ever write code before?',
                'collage_id'=>'12'
            ]
        );

        Questions::create(
            [
                'type'=>'Computer and Information',
                'body'=>'What is IOT stand for?',
                'collage_id'=>'12'
            ]
        );
        Questions::create(
            [
                'type'=>'Computer and Information',
                'body'=>'Are you interested in programming?',
                'collage_id'=>'12'
            ]
        );

        Questions::create(
            [
                'type'=>'Computer and Information',
                'body'=>'Do you have information about AI?',
                'collage_id'=>'12'
            ]
        );

        Questions::create(
            [
                'type'=>'Computer and Information',
                'body'=>'Do you like video games?',
                'collage_id'=>'12'
            ]
        );

        ///////////Law/////////////////



        Questions::create(
            [
                'type'=>'Law',   
                'body'=>'Do you know the difference between economic and non-economic money?',
                'collage_id'=>'21'
            ]
        );

        Questions::create(
            [
                'type'=>'Law',   
                'body'=>'Have you read a book of law?',
                'collage_id'=>'21'
            ]
        );
        Questions::create(
            [
                'type'=>'Law',
                'body'=>'Have you ever entered court?',
                'collage_id'=>'21'
            ]
        );

        Questions::create(
            [
                'type'=>'Law',
                'body'=>'Do you know about the departments of the faculty of law?',
                'collage_id'=>'21'
            ]
        );

        Questions::create(
            [
                'type'=>'Law',
                'body'=>'Would you rather be a lawyer or a consultant?',
                'collage_id'=>'21'
            ]
        );


        ///////////Agriculture//////////////



        Questions::create(
            [
                'type'=>'Agriculture',
                'body'=>'Have you ever planted anything before?',
                'collage_id'=>'29'
            ]
        );

        Questions::create(
            [
                'type'=>'Agriculture',
                'body'=>'Did the temperature affect plant growth?',
                'collage_id'=>'29'
            ]
        );
        Questions::create(
            [
                'type'=>'Agriculture',
                'body'=>'Are all types of soil suitable for growing wheat?',
                'collage_id'=>'29'
            ]
        );

        Questions::create(
            [
                'type'=>'Agriculture',
                'body'=>'Did the green color attract you?',
                'collage_id'=>'29'
            ]
        );

        /////////////Veterinary Medicine////////////////


        Questions::create(
            [
                'type'=>'Veterinary Medicine',
                'body'=>'Have you ever raised a pet?',
                'collage_id'=>'18'
            ]
        );

        Questions::create(
            [
                'type'=>'Veterinary Medicine',
                'body'=>'Have you ever given medicine to an animal before?',
                'collage_id'=>'18'
            ]
        );
        Questions::create(
            [
                'type'=>'Veterinary Medicine',
                'body'=>'Do you know about the euthanasia of animals?',
                'collage_id'=>'18'
            ]
        );

        Questions::create(
            [
                'type'=>'Veterinary Medicine',
                'body'=>'Have you participated in any charity work to help homeless animals?',
                'collage_id'=>'18'
            ]
        );

        Questions::create(
            [
                'type'=>'Veterinary Medicine',
                'body'=>'Is boiled eggs useful for cats?',
                'collage_id'=>'18'
            ]
        );

        ////////////Sciences////////////////


              Questions::create(
                [
                    'type'=>'Sciences',
                    'body'=>'You can"t live without water! What is its chemical formula?',
                    'collage_id'=>'19'
                ]
            );
    
            Questions::create(
                [
                    'type'=>'Sciences',
                    'body'=>'Who is credited with the invention of the modern periodic table?',
                    'collage_id'=>'19'
                ]
            );
            Questions::create(
                [
                    'type'=>'Sciences',
                    'body'=>'The symbol Ag stands for which element?',
                    'collage_id'=>'19'
                ]
            );
    
            Questions::create(
                [
                    'type'=>'Sciences',
                    'body'=>'Density is..?',
                    'collage_id'=>'19'
                ]
            );
    
            Questions::create(
                [
                    'type'=>'Sciences',
                    'body'=>'What does the C stand for in “ E=MC^2” ?',
                    'collage_id'=>'19'
                ]
            );

            ////////////Dentistry///////////////

            
            Questions::create(
                [
                    'type'=>'Dentistry',
                    'body'=>'How many teeth are there in the human mouth?',
                    'collage_id'=>'5'
                ]
            );
    
            Questions::create(
                [
                    'type'=>'Dentistry',
                    'body'=>'How many molars are there in the human mouth?',
                    'collage_id'=>'5'
                ]
            );
            Questions::create(
                [
                    'type'=>'Dentistry',
                    'body'=>'Have you ever experienced dental surgery?',
                    'collage_id'=>'5'
                ]
            );
    
            Questions::create(
                [
                    'type'=>'Dentistry',
                    'body'=>'How many times should you brush your teeth a day to prevent cavity?',
                    'collage_id'=>'5'
                ]
            );
    
            Questions::create(
                [
                    'type'=>'Dentistry',
                    'body'=>'At what age does the wisdom tooth appear?',
                    'collage_id'=>'5'
                ]
            );


            ///////////Pharmacy////////////////


            Questions::create(
                [
                    'type'=>'Pharmacy',
                    'body'=>'Have you ever tried to do a chemical experiment?',
                    'collage_id'=>'9'
                ]
            );
    
            Questions::create(
                [
                    'type'=>'Pharmacy',
                    'body'=>'Do you know how to prepare and use needles?',
                    'collage_id'=>'9'
                ]
            );
            Questions::create(
                [
                    'type'=>'Pharmacy',
                    'body'=>'Do you know how to measure blood pressure?',
                    'collage_id'=>'9'
                ]
            );
    
            Questions::create(
                [
                    'type'=>'Pharmacy',
                    'body'=>'Have you ever worked in a pharmacy?',
                    'collage_id'=>'9'
                ]
            );
    
            Questions::create(
                [
                    'type'=>'Pharmacy',
                    'body'=>'Do you know how to read prescription?',
                    'collage_id'=>'9'
                ]
            );

            //////////////Commerce////////////////////


            Questions::create(
                [
                    'type'=>'Commerce',
                    'body'=>'Are you interested in business?',
                    'collage_id'=>'30'
                ]
            );
    
            Questions::create(
                [
                    'type'=>'Commerce',
                    'body'=>'The group of customers that a business intends to sell its products to is called a …?',
                    'collage_id'=>'30'
                ]
            );
            Questions::create(
                [
                    'type'=>'Commerce',
                    'body'=>'Which number is the number you multiply by itself, and then add the number five to, the final result being 30?',
                    'collage_id'=>'30'
                ]
            );
    
            Questions::create(
                [
                    'type'=>'Commerce',
                    'body'=>'Ahmed bought 10 pieces of chocolate, and the price of one piece was 2 pound, and the owner of the shop deducted 5% from the total price of the chocolate. Calculate how much Ahmed paid?',
                    'collage_id'=>'30'
                ]
            );
    
            Questions::create(
                [
                    'type'=>'Commerce',
                    'body'=>'There are five consecutive numbers in a month. If you add these numbers together, you get 100?',
                    'collage_id'=>'30'
                ]
            );


            /////////////////////Politics and Economics/////////////////////////////

        
            Questions::create(
                [
                    'type'=>'Politics and Economics',
                    'body'=>'Was it the revolution of Ahmed Orabi in the year 1877?',
                    'collage_id'=>'28'
                ]
            );
    
            Questions::create(
                [
                    'type'=>'Politics and Economics',
                    'body'=>'Who is the last president of Egypt before President Abdel Fattah el-Sisi ?',
                    'collage_id'=>'28'
                ]
            );
            Questions::create(
                [
                    'type'=>'Politics and Economics',
                    'body'=>'Egypt recorded the highest level of gold reserves in the year?',
                    'collage_id'=>'28'
                ]
            );
    
            Questions::create(
                [
                    'type'=>'Politics and Economics',
                    'body'=>'Was it the beginning of the January 27 revolution?',
                    'collage_id'=>'28'
                ]
            );
    
            Questions::create(
                [
                    'type'=>'Politics and Economics',
                    'body'=>'In what year was the peace treaty between Egypt and Israel?',
                    'collage_id'=>'28'
                ]
            );

            ////////////Media//////////////


            
        
            Questions::create(
                [
                    'type'=>'Media',
                    'body'=>'do you have the ability to stand in front of camera?',
                    'collage_id'=>'22'
                ]
            );
    
            Questions::create(
                [
                    'type'=>'Media',
                    'body'=>'can you speak English?',
                    'collage_id'=>'22'
                ]
            );
            Questions::create(
                [
                    'type'=>'Media',
                    'body'=>'Do you know what is the administrative division of Egypt?',
                    'collage_id'=>'22'
                ]
            );
    
            Questions::create(
                [
                    'type'=>'Media',
                    'body'=>'Are you interested in reading newspaper and magazine?',
                    'collage_id'=>'22'
                ]
            );
    
            Questions::create(
                [
                    'type'=>'Media',
                    'body'=>'Do you know the most important media personalities in your country?',
                    'collage_id'=>'22'
                ]
            );
            
            ///////////Applied Arts///////////////

            Questions::create(
                [
                    'type'=>'Applied Arts',
                    'body'=>'Do you have a talent for drawing?',
                    'collage_id'=>'11'
                ]
            );
    
            Questions::create(
                [
                    'type'=>'Applied Arts',
                    'body'=>'Is white a hot color?',
                    'collage_id'=>'11'
                ]
            );
            Questions::create(
                [
                    'type'=>'Applied Arts',
                    'body'=>'Do you know drawing tools?',
                    'collage_id'=>'11'
                ]
            );
    
            Questions::create(
                [
                    'type'=>'Applied Arts',
                    'body'=>'What is the color green made of?',
                    'collage_id'=>'11'
                ]
            );
    
            Questions::create(
                [
                    'type'=>'Applied Arts',
                    'body'=>'Where is the hanging church located?',
                    'collage_id'=>'11'
                ]
            );


            Questions::create(
                [
                    'type'=>'Applied Arts',
                    'body'=>'Do you have stage fright?',
                    'collage_id'=>'11'
                ]
            );
    
            Questions::create(
                [
                    'type'=>'Applied Arts',
                    'body'=>'Are you interested in celebrity news?',
                    'collage_id'=>'11'
                ]
            );
            Questions::create(
                [
                    'type'=>'Applied Arts',
                    'body'=>'Have you participated in theatrical work?',
                    'collage_id'=>'11'
                ]
            );
    
            Questions::create(
                [
                    'type'=>'Applied Arts',
                    'body'=>'Do you have a passion for learning directing?',
                    'collage_id'=>'11'
                ]
            );
    
            Questions::create(
                [
                    'type'=>'Applied Arts',
                    'body'=>'Have you tried to embody a person?',
                    'collage_id'=>'11'
                ]
            );

            ////////////////Literature/////////////////////




            Questions::create(
                [
                    'type'=>'Literature',
                    'body'=>'Have you studied French?',
                    'collage_id'=>'6'
                ]
            );
    
            Questions::create(
                [
                    'type'=>'Literature',
                    'body'=>'Who is the first queen to rule Egypt?',
                    'collage_id'=>'6'
                ]
            );
            Questions::create(
                [
                    'type'=>'Literature',
                    'body'=>'Have you read a shakespeare novel?',
                    'collage_id'=>'6'
                ]
            );
    
            Questions::create(
                [
                    'type'=>'Literature',
                    'body'=>'Are you interested in learning about human mental health?',
                    'collage_id'=>'6'
                ]
            );
    
            Questions::create(
                [
                    'type'=>'Literature',
                    'body'=>'Where is the red sea located ?',
                    'collage_id'=>'6'
                ]
            );




    }
}
