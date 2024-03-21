<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    public function index(){

    $servicesData = [
            [
                'name' => 'Quality Management Certification Process ISO 9001',
                'description' => "Certify your organization's commitment to quality with our ISO 9001 certification services. Our expert team will guide you through the process, ensuring compliance and driving continuous improvement.",
                'imageBackground' => 'QualityManagementCertification.jpg',
                'classIdentifier' => 'services-1-data',
                'isReverse' => false

            ],
            [
                'name' => 'Food Safety Management Certification Process ISO 22000',
                'description' => "Embark on the journey towards food safety excellence with our ISO 22000 certification services. Our expert team will guide you through every step of the certification process, ensuring compliance with international food safety standards.",
                'imageBackground' => 'FoodSafetyManagementCertification.jpg',
                'classIdentifier' => 'services-2-data',
                'isReverse' => true
            ],
            [
                'name' => 'Plant/Facility Layout Design',
                'description' => 'Optimize your operational efficiency with our tailored plant/facility layout design services. Our expert team combines industry experience with cutting-edge technology to create layouts that maximize space utilization, streamline workflow, and enhance productivity. From initial concept to final implementation, we collaborate closely with you to ensure your facility meets your unique requirements and drives business success.',
                'imageBackground' => 'LayoutDesign.jpg',
                'classIdentifier' => 'services-3-data',
                'isReverse' => false
            ],
            [
                'name' => 'FDA Requirements Processing',
                'description' => "Ensure FDA compliance effortlessly with our streamlined processing services. From formulation to labeling, we will guide you through every step, ensuring your products meet the highest safety standards.",
                'imageBackground' => 'FDA_RequirementsProcessing.jpg',
                'classIdentifier' => 'services-4-data',
                'isReverse' => true
            ],
            [
                'name' => 'Manpower Agency',
                'description' => 'Empower your workforce with our premier manpower agency services. We specialize in connecting businesses with top talent, providing customized staffing solutions to meet your unique needs. From temporary placements to permanent hires, we streamline the recruitment process, saving you time and resources. Let us be your partner in building a strong, skilled workforce.',
                'imageBackground' => 'ManpowerAgency.jpg',
                'classIdentifier' => 'services-5-data',
                'isReverse' => false
            ],
            [
                'name' => 'HR Management Setup',
                'description' => "Transform your organization's HR function with our comprehensive management setup services. We specialize in designing and implementing customized HR systems tailored to your business needs. From structuring policies and procedures to implementing cutting-edge HR technology, we ensure efficiency, compliance, and employee satisfaction. Let us streamline your HR processes and unleash your team's full potential.",
                'imageBackground' => 'HrManagementSetup.jpg',
                'classIdentifier' => 'services-6-data',
                'isReverse' => true
            ],
            [
                'name' => 'Leadership Mentoring',
                'description' => 'Elevate your leadership potential with our tailored mentoring services. Our seasoned mentors provide personalized guidance and support to help you hone your leadership skills and navigate complex challenges. Through one-on-one sessions and practical insights, we empower you to unlock your full potential and drive meaningful change. Take the next step in your leadership journey with us.',
                'imageBackground' => 'LeadershipMentoring.jpg',
                'classIdentifier' => 'services-7-data',
                'isReverse' => false
            ],
            [
                'name' => 'Training on food safety and quality management',
                'description' => "Elevate your team's expertise with our specialized training programs on food safety and quality management. Our courses cover essential topics such as HACCP principles, sanitation practices, regulatory compliance, and quality assurance techniques. Led by industry experts, our interactive sessions provide practical insights and best practices to ensure the highest standards of food safety and quality. Equip your team with the knowledge and skills they need to excel in today's competitive market.",
                'imageBackground' => 'TrainingOnFoodSafetyAndQualityManagement.jpg',
                'classIdentifier' => 'services-8-data',
                'isReverse' => true
            ],
            [
                'name' => 'Systems Compliance Audit',
                'description' => "Ensure your organization's adherence to industry standards and regulations with our comprehensive Systems Compliance Audit services. Our expert auditors meticulously review your systems, processes, and documentation to identify areas of non-compliance and recommend corrective actions. Whether it's ISO standards, regulatory requirements, or internal policies, we provide thorough assessments and actionable insights to help you mitigate risks and maintain compliance. Trust us to safeguard your organization's reputation and integrity.",
                'imageBackground' => 'SystemsComplianceAudit.jpg',
                'classIdentifier' => 'services-9-data',
                'isReverse' => false
            ],
            [
                'name' => 'IT Solutions',
                'description' => "Empower your business with innovative IT solutions tailored to your unique needs. From custom software development and cloud migration to cybersecurity and IT infrastructure optimization, we provide end-to-end technology services to drive efficiency and growth. Our team of experienced professionals leverages the latest tools and methodologies to deliver scalable, reliable, and cost-effective solutions that propel your business forward. Partner with us to unlock the full potential of technology and stay ahead in today's digital landscape. ",
                'imageBackground' => 'IT_Solutions.jpg',
                'classIdentifier' => 'services-10-data',
                'isReverse' => true
            ],
            [
                'name' => 'Manpower Services',
                'description' => "Streamline your workforce management with our dynamic manpower services. We specialize in sourcing, screening, and deploying top talent to meet your staffing needs efficiently and effectively. Whether you require temporary staff for a project or permanent hires to grow your team, we provide flexible solutions tailored to your requirements. Our commitment to quality and professionalism ensures that you receive the best candidates who seamlessly integrate into your organization. Partner with us to optimize your manpower resources and drive business success.",
                'imageBackground' => 'ManpowerServices.jpg',
                'classIdentifier' => 'services-11-data',
                'isReverse' => false
            ],
        ];

    return view('pages.services', compact('servicesData'));

    }
}
