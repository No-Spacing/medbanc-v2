<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Category;
use App\Models\Roles;
use App\Models\Career;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    
        Roles::create([
            'role' => 'administrator'
        ]);

        User::create([
            'name' => 'admin',
            'email' => 'admin@email.com',
            'password' => Hash::make('admin123'),
            'role_id' => 1,
        ]);

        Category::insert([
            ['name' => 'Medical Equipment', 'image' => 'images/products/medical.png', 'slug' => 'medical_equipment', 'created_at' => now()],
            ['name' => 'Laboratory Products', 'image' => 'images/products/lab.png', 'slug' => 'laboratory_products', 'created_at' => now()],
        ]);

        Product::insert([
            [
                'name' => 'Edan Patient Monitor IM50',
                'description' => "
                    Edan iM50 Patient Monitor is a lightweight and portable patient monitor, a great choice for patient transport, with optional IBP and capnography support expands its applications to a wider usage in sub-acute divisions.
                    
                    <strong>Features and Benefits:</strong>
                        - Pacemaker detection, electrosurgical interference proof.
                        - Defibrillation protection and defibrillation synchronization.
                        - Unique iSEAP algorithm, optimized for arhytmia patients.
                        - Dual-mode anti-interference pulse oximeter.
                        - Support barcode scanner.
                        - Complete and flexible mounting solutions.
                        - Nurse call function
                        - Standard Parameter: 3/5-lead ECG, HR, RESP, EDAN SpO2, NIBP, PR, 2-TEMP
                "
                ,'category_id' => 1, 'created_at' => now()
            ],
            [
                'name' => 'Edan ECG Machine SE-12 Express',
                'description' => "
                    The Edan ECG Machine SE-12 Express is designed to meet high-standard ECG requirements, designed with complete powerful data analysis functions, this unit offers reliable ECG solutions for both resting ECG and stress test.
                    
                    <strong>Features and Benefits:</strong>
                        - Large high resolution colored touchscreen display.
                        - Comprehensive filters & anti-noise technology.
                        - Real-time ECG waveforms freezing and review.
                        - Advanced SEMIP algorithm for automatic measurements and interpretation.
                        - Built-in high resolution thermal printer.
                "
                ,'category_id' => 1, 'created_at' => now()
            ],
            [
                'name' => 'Edan SE-1515 PC ECG',
                
                'description' => "
                    Edan SE-1515 PC ECG an advanced professional ECG workstation, combining robust functionality, exquisite ECG sampling boxes, and other important accessories, providing comprehensive solutions for every scenario.
                    
                    <strong>Features and Benefits:</strong>
                        - Provides clear stress test readings for monitoring progress, heart condition, workload, device status, and BP levels.
                        - Waveform segments can be magnified, measurements adjusted, and ECG reports updated with one click.
                        - Current and past reports can be compared for easy prognosis assessment.
                "
                ,'category_id' => 1, 'created_at' => now()
            ],
            [
                'name' => 'Edan F9 Express Fetal & Maternal Monitor',
                
                'description' => "
                    Edan F9 Express Fetal & Maternal Monitor is an innovative fetal and maternal monitor that features integrated monitoring of twin's FHR, uterine activity, fetal movement, intrauterine pressure, direct ECG as well as maternal NIBP, SPO2, ECG and temperature. Designed for the obstetrical care continuum, spanning from the antepartum and intrapartum states to postpartum state.
                    
                    <strong>Features and Benefits:</strong>
                        - 12.1” high resolution, colored TFT-LCD screen.
                        - 12-crystal beam waterproof FHR transducer, 12-crystal broad-beam.
                        - 24 hours back up memory for seamless monitoring.
                        - Three monitoring interfaces for different clinical needs.
                        - Signal overlap verification to seperate twins' FHR.
                        - Flat surface design with waterproof TOCO transducer.
                "
                ,'category_id' => 1, 'created_at' => now()
            ],
            [
                'name' => 'Comen Defibrillator S8',
                
                'description' => "
                    Comen Diefibrillator S8 delivers higher efficiency with advanced biphasic truncated exponential (BTE) waveform technology and automatic impedance compensation, this unit forgoes complex operations to improve the convenience and efficiency in rescue.
                    
                    <strong>Features and Benefits:</strong>
                        - 1 knob to switch modes between manual defibrillation, pacing and AED.
                        - 25 types of energy selection.
                        - Fully guaranteed rescue time, due to 1 second complete energy selection.
                        - 1 button to select 12-lead monitoring interface.
                        - 3 steps to complete defibrillation operation: energy selection, charge and discharge.
                "
                ,'category_id' => 1, 'created_at' => now()
            ],
            [
                'name' => ' TMS Infusion Pump TI-600',
                'description' => "
                    TMS Infusion Pump TI-600 is a reliable medical device that delivers fluids and medications into the patient's body in controlled amounts. Easy to operate by just turning the rotary dial to select desired settings. Compact and lightweight for easy handling and mounting.
                    
                    <strong>Features and Benefits:</strong>
                        - Compatible with IV sets of any standard
                        - Real-time infused volume
                        - Automatic power switching
                        - Curvilinear peristaltic pumping mechanism
                        - With history log of 20,000 events
                        - With battery life of 5 hours at 25mL/hr
                        - With built-in thermostat (from 30-45°C)
                "
                ,'category_id' => 1, 'created_at' => now()
            ],
            [
                'name' => 'TMS Infusion Pump TI-820',
                'description' => "
                    TMS Infusion Pump TI-820 is an advanced infusion device, designed to guarantee accuracy of dose rate, engineered with; drug library, history record review and last configuration memory.
                    
                    <strong>Features and Benefits:</strong>
                        - Universal: Compatible with any brand of IV sets.
                        - Accuracy: High-precision performance
                        - Easy to use with intuitive operation system
                        - Safety: Alarm volume adjustable in 9 levels and bubble detection with 3 sensitivities
                        - Smart touch button, TFT oversize touchscreen
                        - With built-in thermostat (from 30-45 degree Celsius)
                "
                ,'category_id' => 1, 'created_at' => now()
            ],
            [
                'name' => 'TMS Syringe Pump, Model TS900',
                'description' => "
                     TMS Syringe Pump TS-900 is an advance administration device that can accurately control syringe velocity, designed to administer fluid/medication to the patient in guaranteed acurate dose rate.
                   
                    <strong>Features and Benefits:</strong>
                        - Universal: Compatible with any syringe brand, with different sets of standards
                        - Accuracy: People-oriented design, allows interactive operation, provides high-precision performance
                        - Easy-to-use: Intuitive operation system, drug library, history record review and last configuration memory
                        - Safety: Alarm volume adjustable in 9 levels, double CPU, bubble detection with 3 sensitivities
                        - Features: Smart touch button, high-definition touchscreen
                "
                ,'category_id' => 1, 'created_at' => now()
            ],
            [
                'name' => 'TMS Heavy Duty Suction Unit T-300',               
                'description' => "
                    TMS Heavy Duty Suction Unit T-300 is a portable medical suctioning device that produces maximum vacuum of 560mmHg. The unit is equipped with 800ml collection bottle, designed for convenient and reliable usage.
                    
                    <strong>Features and Benefits:</strong>
                        - New anti-bacterial filter design, helps prevent contamination.
                        - High-quality vacuum regulator and anti-vibration vacuum gauge setting.
                        - Oil-less permanent lubrication.
                        - 800ml collection bottle with overflow protection.
                "
                ,'category_id' => 1, 'created_at' => now()
            ],
            [
                'name' => 'TMS Heavy Duty Suction Unit T-520', 
                'description' => "
                    TMS Heavy Duty Suction Unit T-520 is a mobile medical suctioning unit that produces maximum vacuum pressure of 630mmHG. The unit can work with two 3000ml collection bottles, four 45cm tubing and two 180cm tubing, designed for convenient, reliable usage and continuous operation.
                    
                    <strong>Features and Benefits:</strong>
                        - New anti-bacterial filter design, helps prevent contamination.
                        - High-quality vacuum regulator and anti-vibration vacuum gauge setting.
                        - Collection bottle with overflow protection.
                        - Quiet and effective operation due to the unique design of the WOBL Piston.
                "
                ,'category_id' => 1, 'created_at' => now()
            ],
            [
                'name' => 'Medbanc Double Face Medication Trolley',
                'description' => "
                    Medbanc Double Face Medication Trolley is designed for fast, efficient and secure storage of medications in Hospitals, institutions or private clinics.
                    
                    <strong>Features and Benefits:</strong>
                        - Top plate are ABS engineering plastic
                        - ABS side tray
                        - 50 cases for medication
                        - Swivel casters with 2 brakes
                "
                ,'category_id' => 1, 'created_at' => now()
            ],
            [
                'name' => 'Medbanc Emergency Cart with Tamper-Evident Lock',
                'description' => "
                    Medbanc Emergency Cart offers stable, smooth mobility and enhanced convenience, with changeable accessories, as well as tamper-evident lock for extra security.
                    
                    <strong>Features and Benefits:</strong>
                        - Define a new standard of organization and function
                        - With IV pole, defibrillator shelf, CPR board, oxygen tank holder and sharps disposal with bracket
                        - ABS top with slide out work surface
                        - Central lock control
                        - Intuitive design
                        - Available in blue and red
                "
                ,'category_id' => 1, 'created_at' => now()
            ],
            [
                'name' => 'Anesthesia Carts',
                'description' => '
                    Anesthesia Cart allows you to securely store controlled drugs and organize medications within a single mobile unit. Its exceptional practicality comes from a wide range of accessories, including Tilt Bin Organizers and Sharp Container sets, enabling you to customize the cart to suit the specific needs of an anesthesia department.
                    
                    <strong>Features and Benefits:</strong>
                        - Built with steel and aluminum to increase durability and lifespan.
                        - Securing all drawers right at the side with Central Key Locking System.
                        - Securable top drawer for controlled drugs.
                        - Tilt bin organizers and bulk storage bin
                        - Powder-coat finish
                        - Stabilizing protective bumpers
                        - 5 ball-bearing casters, all full-swivel (1 directional, 1 braking)'
                        ,'category_id' => 1, 'created_at' => now()
            ],
            [
                'name' => 'Treatment / Procedure Carts',
                'description' => '
                    Treatment / Procedure Cart is a functional and versatile treatment cart designed to streamline medical procedures. Its multi-storage drawers provide ample space to efficiently organize essential tools and medications.
                    
                    <strong>Features and Benefits:</strong>
                        - Built with steel and aluminum to increase durability and lifespan.
                        - Extended working area with Slide-out Work Surface.
                        - Powder-coat finish
                        - Stabilizing protective bumpers
                        - 5" ball-bearing casters, all full-swivel (1 directional, 1 braking)'
                        ,'category_id' => 1, 'created_at' => now()
            ],
            [
                'name' => 'Isolation Carts',
                'description' => '
                    Isolation Cart is a specialized medical cart designed for healthcare environments, particularly isolation rooms, to support healthcare staff in infection control efforts. Built with steel sheet metal to increase durability and lifespan.
                    
                    <strong>Features and Benefits:</strong>
                        - Impact resistant ABS Bottom Bumper.
                        - Securing all drawers with Central Key Locking System.
                        - A smooth workflow facilitated by Auto-return Ball Bearing Drawer Slides.
                        - Comprehensive accessory options with Fixed-height Accessory Mount.
                        - Extended working area with Slide-out Work Surface.
                        - Large drawer designed to keep personal protective equipment organized and secure.'
                        ,'category_id' => 1, 'created_at' => now()
            ],
            [
                'name' => 'Medication Cart',
                
                'description' => '
                    Medication Cart seamlessly integrates medication dispensing with the demands of patient rounding, making it an ideal solution for routine patient care. Built with a durable, impact-resistant aluminum structure, this practical cart features a flexible accessory mount, allowing full customization to meet your specific needs.
                    
                    <strong>Features and Benefits:</strong>
                        - Comprehensive accessory options.
                        - Flexible accessory mount integrated in rigid aluminum structure.
                        - Additional protection through ABS bottom bumper.
                        - Duo access to patient bins.
                        - Customizable drawer capacity and layout.
                        - Durable sheet metal cart body and drawer.
                        - Sustainable powder coating.'
                        ,'category_id' => 1, 'created_at' => now()
            ],
            [
                'name' => 'Medical Transport Carts',
                'description' => '
                    Medical Transport Cart is a lightweight cart designed for efficient transport and essential storage. It features a standard easy-close ABS shutter that securely protects contents during transit. Equipped with cell panels, it allows trays and baskets to function as fully extending drawers, ensuring convenient organization and access to stored items.
                    
                    <strong>Features and Benefits:</strong>
                        - Easy to clean ABS top surface.
                        - Sliding table for extended work space.
                        - Smooth shutter door with key lock.
                        - User friendly push handle.
                        - Interchangeable ABS trays and wire baskets available'
                        ,'category_id' => 1, 'created_at' => now()
            ],
            [
                'name' => 'Proximity Lock Cart',
                'description' => '
                    Proximity Lock Cart is a secure medical or storage cart featuring an advanced proximity-based locking system for enhanced access control. Utilizing RFID, keycards, or biometric authentication, it automatically unlocks when an authorized user approaches and relocks when they move away.
                    
                    <strong>Features and Benefits:</strong>
                        - Keyless mechanism
                        - Smart card unlocking
                        - Auto-relock protection
                        - Access card with up to 2,000 record track
                        - Smart management for medication control via PC.'
                        ,'category_id' => 1, 'created_at' => now()
            ],
            [
                'name' => 'Chison SonoMax 9 Ultrasound',
                'description' => '
                    Chison SonoMax 9 Ultrasound machine, powered by the MAX++ platform, features a large HD LED screen, an adjustable touch screen, and multiple transducer connectors. Designed to enhance medical imaging, it delivers an intuitive workflow and outstanding performance across various applications.
                    
                    <strong>Features and Benefits:</strong>
                        - 15.6" angle 30° adjustable touch screen
                        - 25cm flexible height adjustment
                        - 23.8l size HD led screen
                        - 5 transducer connectors with stylish lights
                        - Smaller projected area
                        - Fast and reliable after-sales service
                        - Suitable for various applications, including general practice, cardiac, and women`s health.
                        - The MAX++ platform and advanced imaging capabilities contribute to exceptional performance.
                        - The adjustable screen, height adjustment, and keyboard are designed for operator comfort and efficiency.'
                        ,'category_id' => 1, 'created_at' => now()
            ],
            [
                'name' => 'Chison SonoAir 70 Ultrasound',
                'description' => '
                    The Chison SonoAir 70 is a compact, laptop-style ultrasound system designed for portability and user convenience. It features a responsive touchscreen, a 180-minute battery life, and multiple probe connectors, making it ideal for a wide range of clinical applications.
                    
                    <strong>Features and Benefits:</strong>
                        - Latest AIR platform
                        - Easy connect with 4 ports
                        - 2.1 kg Ultra-light weight (with battery)
                        - 26 mm thickness designed to be lightweight and thin, making it easy to move around and use in different locations.
                        - It includes features like a responsive touchscreen, touchpad, Touch ID, and smart tools for ease of use and efficiency.'
                        ,'category_id' => 1, 'created_at' => now()
            ],
            [
                'name' => 'Chison SonoEye',
                
                'description' => "
                    Chison SonoEye is a compact, handheld ultrasound device designed for portability, ease of use, and high-quality imaging. Ideal for various clinical applications, including point-of-care ultrasound (POCUS) and remote healthcare, it provides reliable imaging in any setting.
                    
                    <strong>Features and Benefits:</strong>
                        - Half weight of a phone, highly integrated design, less volume.
                        - Can connect wirelessly to smartphones or tablets for image viewing and storage.
                        - Suitable for a wide range of applications, including cardiovascular, musculoskeletal, small parts, OB/GYN, anesthesia, emergency medicine, and other POCUS applications.
                        - It features a user-friendly app and simplified workflow, making it easy to learn and use."
                        ,'category_id' => 1, 'created_at' => now()
            ],
            [
                'name' => 'Surgisenz Electrosurgical Unit PRO-ESU 150',
                
                'description' => "
                    Surgisenz Electrosurgical Unit PRO-ESU 150 is a smart and lightweight electrosurgical unit, designed for use in minor to medium surgical operations.
                    
                    <strong>Features and Benefits:</strong>
                        - Compact design for both monopolar and bipolar.
                        - Max of 4 working modes: Pure/Blend, Standard/Bipolar
                        - Fast troubleshooting by default error alarm system.
                        - Return Electrode Monitoring (REM) system for highest safety.
                        - Excellent operation performance with minimal sticking & carbonization.
                        - Different adjustable audible alarms in case of misoperation.
                        - Wide clinical application for different surgical operations."
                        ,'category_id' => 1, 'created_at' => now()
            ],
            [
                'name' => 'Surgisenz Electrosurgical Unit PRO-ESU 400',
                'description' => "
                    Surgisenz Electrosurgical Unit PRO-ESU 400 is a high-frequency, advanced multi-functional electrosurgical unit, engineered for safe operation, fast tissue incision and blood coagulation through high-frequency current.
                    
                    <strong>Features and Benefits:</strong>
                        - Easy-to-use buttons for simple operation.
                        - High power output 400W for higher frequency requirement.
                        - Up to 7 work modes: Pure/Blend1/Blend2, Standard/Spray, Bipo1/Bipo2
                        - Increment of 5W micro power control system to ensure optimal effect.
                        - Excellent operation performance with minimal sticking and carbonization.
                        - Quick troubleshooting with default error alarm system.
                        - Auto-terminate of power output after 5 seconds to avoid misoperation.
                        - Supports endoscope connection and underwater cutting (TURP etc)."
                        ,'category_id' => 1, 'created_at' => now()
            ]
        ]);

        // ProductImage::insert([
        //     ['image' => 'images/products/medical-equipment/im50.png', 
        //     'product_id' => 1, 'created_at' => now()],
        //     ['image' => 'images/products/medical-equipment/im50-1.png',
        //     'product_id' => 1, 'created_at' => now()],
        //     ['image' => 'images/products/medical-equipment/im50-2.png',
        //     'product_id' => 1, 'created_at' => now()],
        //     ['image' => 'images/products/medical-equipment/im50-3.png',
        //     'product_id' => 1, 'created_at' => now()],
        //     ['image' => 'images/products/medical-equipment/im50-4.png',
        //     'product_id' => 1, 'created_at' => now()],
        //     ['image' => 'images/products/medical-equipment/im50-5.png',
        //     'product_id' => 1, 'created_at' => now()],
        //     ['image' => 'images/products/medical-equipment/se12.png',
        //     'product_id' => 2, 'created_at' => now()],
        //     ['image' => 'images/products/medical-equipment/se12-1.png',
        //     'product_id' => 2, 'created_at' => now()],
        //     ['image' => 'images/products/medical-equipment/se12-2.png',
        //     'product_id' => 2, 'created_at' => now()],
        //     ['image' => 'images/products/medical-equipment/se12-3.png',
        //     'product_id' => 2, 'created_at' => now()],	
        //     ['image' => 'images/products/medical-equipment/EdanECGse1515.png',
        //     'product_id' => 3, 'created_at' => now()],
        //     ['image' => 'images/products/medical-equipment/EdanECGse1515-1.png',
        //     'product_id' => 3, 'created_at' => now()],
        //     ['image' => 'images/products/medical-equipment/EdanECGse1515-2.png',
        //     'product_id' => 3, 'created_at' => now()],
        //     ['image' => 'images/products/medical-equipment/EdanECGse1515-3.png',
        //     'product_id' => 3, 'created_at' => now()],
        //     ['image' => 'images/products/medical-equipment/EdanECGse1515-4.png',
        //     'product_id' => 3, 'created_at' => now()],
        //     ['image' => 'images/products/medical-equipment/f9.png',
        //     'product_id' => 4, 'created_at' => now()],
        //     ['image' => 'images/products/medical-equipment/f9-1.png',
        //     'product_id' => 4, 'created_at' => now()],
        //     ['image' => 'images/products/medical-equipment/comendefis8.png', 
        //     'product_id' => 5, 'created_at' => now()],
        //     ['image' => 'images/products/medical-equipment/comendefis8-1.png',
        //     'product_id' => 5, 'created_at' => now()],
        //     ['image' => 'images/products/medical-equipment/comendefis8-2.png',
        //     'product_id' => 5, 'created_at' => now()],
        //     ['image' => 'images/products/medical-equipment/comendefis8-3.png',
        //     'product_id' => 5, 'created_at' => now()],
        //     ['image' => 'images/products/medical-equipment/t1600.png',
        //     'product_id' => 6, 'created_at' => now()],
        //     ['image' => 'images/products/medical-equipment/t1600-1.png',
        //     'product_id' => 6, 'created_at' => now()],
        //     ['image' => 'images/products/medical-equipment/t1600-2.png',
        //     'product_id' => 6, 'created_at' => now()],
        //     ['image' => 'images/products/medical-equipment/t1600-3.png',
        //     'product_id' => 6, 'created_at' => now()],
        //     ['image' => 'images/products/medical-equipment/ti820.png',
        //     'product_id' => 7, 'created_at' => now()],
        //     ['image' => 'images/products/medical-equipment/ts900.png',
        //     'product_id' => 8, 'created_at' => now()],
        //     ['image' => 'images/products/medical-equipment/t300.png',
        //     'product_id' => 9, 'created_at' => now()],
        //     ['image' => 'images/products/medical-equipment/t520.png',
        //     'product_id' => 10, 'created_at' => now()],
        //     ['image' => 'images/products/medical-equipment/mdf.png',
        //     'product_id' => 11, 'created_at' => now()],
        //     ['image' => 'images/products/medical-equipment/mecart.png',
        //     'product_id' => 12, 'created_at' => now()],
        //     ['image' => 'images/products/medical-equipment/ac.png',
        //     'product_id' => 13, 'created_at' => now()],
        //     ['image' => 'images/products/medical-equipment/tpc.png',
        //     'product_id' => 14, 'created_at' => now()],
        //     ['image' => 'images/products/medical-equipment/ic.png',
        //     'product_id' => 15, 'created_at' => now()],
        //     ['image' => 'images/products/medical-equipment/mc.png',
        //     'product_id' => 16, 'created_at' => now()],
        //     ['image' => 'images/products/medical-equipment/mtc.png',
        //     'product_id' => 17, 'created_at' => now()],
        //     ['image' => 'images/products/medical-equipment/plc.png',
        //     'product_id' => 18, 'created_at' => now()],
        //     ['image' => 'images/products/medical-equipment/sonomax9.png',
        //     'product_id' => 19, 'created_at' => now()],
        //     ['image' => 'images/products/medical-equipment/sonoair.png',
        //     'product_id' => 20, 'created_at' => now()],
        //     ['image' => 'images/products/medical-equipment/sonoeye.png',
        //     'product_id' => 21, 'created_at' => now()],
        //     ['image' => 'images/products/medical-equipment/surgisenz150.png',
        //     'product_id' => 22, 'created_at' => now()],
        //     ['image' => 'images/products/medical-equipment/surgisenz400.png',
        //     'product_id' => 23, 'created_at' => now()],
        // ]);
        
    
    
    Career::create([
        'title' => 'Accounting Head',
        'summary' => 'The Accounting Head oversees daily accounting operations, ensuring accurate financial reporting, compliance with regulations, and efficiency in processes. This role includes supervising statements, preparing reports, and assisting with audits and tax filling.',
        'responsibilities' => "Supervise and manage the accounting team, providing guidance and support.
         Oversee daily accounting functions, including accounts payable, accounts receivable, and general ledger reconciliation.
         Prepare and review financial statements to ensure accuracy and compliance with accounting standards.
         Monitor and ensure compliance with tax regulations, financial policies, and internal controls.
         Assist in the preparation of budgets, forecasts, and financial analysis.
         Coordinate and support internal and external audits.
         Review and approve journal entries, reconciliations, and financial reports.
         Develop and implement process improvements to enhance efficiency and accuracy.
         Train and mentor accounting staff, fostering a culture of continuous learning.
         Perform other duties that may be assigned from time to time.",
        'education' => "Graduate of Bachelor's degree in Accounting, Finance or a related field",
        'experience' => 'At least 3 - 5 years of accounting experience, with 1 - 2 years in a supervisory role',
        'eligibility' => 'CPA certification is a plus',
        'competencies' => "Strong knowledge of accounting principles, financial reporting, and tax regulation
        Excellent analytics, problem-solving and leadership skills
        Strong attention to details and the ability to manage multiple tasks effectively
        Good communication and interpersonal skills",
        'work_conditions' => "Work on site
        Morning shift
        Shifting schedule only as the need arises
        Physical Demands (Sitting, Reading, reaching with hands/arms, handling mechanical/electrical equipment, Standing, Talking, Typing, and Listening)
        Environmental conditions in local sites, may be exposed to air-conditioned environment, and moderate noise.",
        'address' => "Unit 1806 Prestige Tower F. Ortigas Jr. Road, Ortigas Center Pasig City 1605, Philippines",
        'availability' => 1,
        'employment_type' => 'Full-time',
    ]);

    Career::create([
        'title' => 'Accounting Staff',
        'summary' => 'The Accounting Staff is responsible for assisting with daily accounting tasks, maintaining financial records, and ensuring accuracy in financial transactions. This role provides support in bookkeeping, data entry, reconciliations and financial reporting while gaining hands-on experience in accounting functions.',
        'responsibilities' => "Records and process financial transactions, including accounts payables and accounts receivable
         Assist in preparing financial reports, invoices, and payment records
         Perform bank reconciliations and monitors cash flows
         Maintain accurate and organized financial records
         Assists in preparing tax fillings and ensuring compliance with financial regulations
         Support month end and year end closing activities
         Coordinate with other departments for financial data and reporting needs
         Assists in audits by preparing necessary documentation.
         Perform other administrative and accounting tasks as assigned
         Performs other duties that maybe assigned from time to time.",
        'education' => "Graduate of Bachelor's degree in Accounting, Finance or a related field",
        'experience' => 'Fresh graduates are welcome; prior internship
         Work experience in accounting is a plus',
        'eligibility' => '',
        'competencies' => "Basic knowledge of accounting principles and financial reporting
        Proficiency in Microsoft Excel and Accounting software
        Strong attention to details and accuracy
        Ability to work in a team and follow instruction",
        'work_conditions' => "Work on site
        Morning shift
        Shifting schedule only as the need arises
        Physical Demands (Sitting, Reading, reaching with hands/arms, handling mechanical/electrical equipment, Standing, Talking, Typing, and Listening)
        Environmental conditions in local sites, may be exposed to air-conditioned environment, and moderate noise.",
        'address' => "Unit 1806 Prestige Tower F. Ortigas Jr. Road, Ortigas Center Pasig City 1605, Philippines",
        'availability' => 1,
        'employment_type' => 'Full-time',
    ]);
    }
}
