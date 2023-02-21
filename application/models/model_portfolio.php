<?php

class Model_Portfolio extends Model
{
	
	public function get_data()
	{	
		
		// Здесь мы просто сэмулируем реальные данные.
		
		return array(
			
			array(
				'Year' => '2021',
				'Site' => 'http://apple.com',
				'Description' => 'is an American multinational technology company that specializes in consumer electronics, computer software, and online services. Apple is the worlds largest technology company by revenue (totaling $327 billion in 2020) and, since January 2021, the worlds most valuable company.'
			),

			array(
				'Year' => '2021',
				'Site' => 'http://ktm.com',
				'Description' => 'KTM AG (formerly KTM Sportmotorcycle AG[4][5]) is an Austrian motorcycle and sports car manufacturer owned by Pierer Mobility AG and Indian manufacturer Bajaj Auto. It was formed in 1992 but traces its foundation to as early as 1934. Today, KTM AG is the parent company of the KTM Group, consisting of a number of motorcycle brands.'
			),

			array(
				'Year' => '2020',
				'Site' => 'http://strava.com',
				'Description' => 'Strava is an American internet service for tracking human exercise which incorporates social network features. It is mostly used for cycling and running using GPS data.[4] Strava uses a freemium model with some features only available in the paid subscription plan (formerly called Strava Premium and then Strava Summit).'
			),

			array(
				'Year' => '2020',
				'Site' => 'http://cambly.com	',
				'Description' => 'Cambly is an online platform founded in 2020 that provides on-demand access to tutors via video chat. Cambly tutors are native speakers from the United States, Canada, UK and Australia, etc. The platform allows users to connect with the suitable tutor in under 5 seconds. Users can then practise English conversation, take an English course, or prepare for the IELTS or TOEFL exams.
				'
			),

			array(
				'Year' => '2020',
				'Site' => 'https://bsemoto.pro',
				'Description' => 'Bovine spongiform encephalopathy (BSE), commonly known as mad cow disease, is an incurable and invariably fatal neurodegenerative disease of cattle.[2] Symptoms include abnormal behavior, trouble walking, and weight loss.[1] Later in the course of the disease the cow becomes unable to function normally.[1] The time between infection and onset of symptoms is generally four to five years.[2] Time from onset of symptoms to death is generally weeks to months.[2] Spread to humans is believed to result in variant Creutzfeldt–Jakob disease (vCJD).[3] As of 2018, a total of 231 cases of vCJD had been reported globally.[5]'
			),
		);
	}

}