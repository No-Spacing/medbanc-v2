<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Career;

class CareerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Career::truncate(); // Clears old data before seeding new ones

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
            'posted_date' => now(),
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
            'posted_date' => now(),
        ]);


    }
}
