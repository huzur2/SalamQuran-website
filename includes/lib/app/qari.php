<?php
namespace lib\app;


class qari
{
	public static function list()
	{
		$master_path        = 'https://dl.salamquran.com/';

		$list               =
		[
			1  => 	['type' => 'murattal', 'play_type' => 'aya', 'audio_type' => 'mp3', 'addr' => $master_path. 'audio/abdulbaset/ayat/murattal/mp3/', 'qari' => 'AbdulBaset AbdulSamad',],
			2  =>	['type' => 'murattal', 'play_type' => 'aya', 'audio_type' => 'mp3', 'addr' => $master_path. 'audio/abdulbaset/ayat/Abdul_Basit_Murattal_192kbps/', 'qari' => 'AbdulBaset AbdulSamad',],
			3  =>	['type' => 'murattal', 'play_type' => 'aya', 'audio_type' => 'mp3', 'addr' => $master_path. 'audio/abdulbaset/ayat/Abdul_Basit_Murattal_64kbps/', 'qari' => 'AbdulBaset AbdulSamad',],
			4  =>	['type' => 'murattal', 'play_type' => 'aya', 'audio_type' => 'mp3', 'addr' => $master_path. 'audio/abdulbaset/ayat/mujawwad/mp3/', 'qari' => 'AbdulBaset AbdulSamad',],
			5  =>	['type' => 'murattal', 'play_type' => 'aya', 'audio_type' => 'mp3', 'addr' => $master_path. 'audio/abdulbaset/ayat/Abdul_Basit_Mujawwad_128kbps/', 'qari' => 'AbdulBaset AbdulSamad',],
			6  =>	['type' => 'murattal', 'play_type' => 'aya', 'audio_type' => 'mp3', 'addr' => $master_path. 'audio/alafasy/ayat/Alafasy_128kbps/', 'qari' => 'Mishari Rashid al-`Afasy',],
			7  =>	['type' => 'murattal', 'play_type' => 'aya', 'audio_type' => 'mp3', 'addr' => $master_path. 'audio/alafasy/ayat/mp3/', 'qari' => 'Mishari Rashid al-`Afasy',],
			8  =>	['type' => 'murattal', 'play_type' => 'aya', 'audio_type' => 'mp3', 'addr' => $master_path. 'audio/alafasy/ayat/ogg/', 'qari' => 'Mishari Rashid al-`Afasy',],
			9  =>	['type' => 'murattal', 'play_type' => 'aya', 'audio_type' => 'mp3', 'addr' => $master_path. 'audio/husary/ayat/Husary_128kbps/', 'qari' => 'Mahmoud Khalil Al-Husary',],
			10 =>	['type' => 'murattal', 'play_type' => 'aya', 'audio_type' => 'mp3', 'addr' => $master_path. 'audio/husary/ayat/Husary_128kbps_Mujawwad/', 'qari' => 'Mahmoud Khalil Al-Husary',],
			11 => 	['type' => 'murattal', 'play_type' => 'aya', 'audio_type' => 'mp3', 'addr' => $master_path. 'audio/husary/ayat/Husary_64kbps/', 'qari' => 'Mahmoud Khalil Al-Husary',],
			12 => 	['type' => 'murattal', 'play_type' => 'aya', 'audio_type' => 'mp3', 'addr' => $master_path. 'audio/husary/ayat/Husary_Muallim_128kbps/', 'qari' => 'Mahmoud Khalil Al-Husary',],
			13 => 	['type' => 'murattal', 'play_type' => 'aya', 'audio_type' => 'mp3', 'addr' => $master_path. 'audio/husary/ayat/mujawwad/ogg/', 'qari' => 'Mahmoud Khalil Al-Husary',],
			14 => 	['type' => 'murattal', 'play_type' => 'aya', 'audio_type' => 'mp3', 'addr' => $master_path. 'audio/husary/ayat/murattal/ogg/', 'qari' => 'Mahmoud Khalil Al-Husary',],
			15 => 	['type' => 'murattal', 'play_type' => 'aya', 'audio_type' => 'mp3', 'addr' => $master_path. 'audio/minshawi/ayat/Minshawy_Murattal_128kbps/', 'qari' => 'Mohamed Siddiq al-Minshawi',],
			16 => 	['type' => 'murattal', 'play_type' => 'aya', 'audio_type' => 'mp3', 'addr' => $master_path. 'audio/minshawi/ayat/mujawwad/mp3-192kbps/', 'qari' => 'Mohamed Siddiq al-Minshawi',],
			17 => 	['type' => 'murattal', 'play_type' => 'aya', 'audio_type' => 'mp3', 'addr' => $master_path. 'audio/minshawi/ayat/mujawwad/ogg/', 'qari' => 'Mohamed Siddiq al-Minshawi',],
			18 => 	['type' => 'murattal', 'play_type' => 'aya', 'audio_type' => 'mp3', 'addr' => $master_path. 'audio/minshawi/ayat/murattal/mp3/', 'qari' => 'Mohamed Siddiq al-Minshawi',],
			19 => 	['type' => 'murattal', 'play_type' => 'aya', 'audio_type' => 'mp3', 'addr' => $master_path. 'audio/minshawi/ayat/murattal/ogg/', 'qari' => 'Mohamed Siddiq al-Minshawi',],
			20 => 	['type' => 'murattal', 'play_type' => 'aya', 'audio_type' => 'mp3', 'addr' => $master_path. 'audio/rifai/ayat/Hani_Rifai_192kbps/', 'qari' => 'Hani ar-Rifai',],
			21 => 	['type' => 'murattal', 'play_type' => 'aya', 'audio_type' => 'mp3', 'addr' => $master_path. 'audio/rifai/ayat/murattal/mp3/', 'qari' => 'Hani ar-Rifai',],
			22 => 	['type' => 'murattal', 'play_type' => 'aya', 'audio_type' => 'mp3', 'addr' => $master_path. 'audio/rifai/ayat/murattal/ogg/', 'qari' => 'Hani ar-Rifai',],
			23 => 	['type' => 'murattal', 'play_type' => 'aya', 'audio_type' => 'mp3', 'addr' => $master_path. 'audio/shatri/ayat/Abu_Bakr_Ash-Shaatree_128kbps/', 'qari' => 'Abu Bakr al-Shatri',],
			24 => 	['type' => 'murattal', 'play_type' => 'aya', 'audio_type' => 'mp3', 'addr' => $master_path. 'audio/shatri/ayat/murattal/mp3/', 'qari' => 'Abu Bakr al-Shatri',],
			25 => 	['type' => 'murattal', 'play_type' => 'aya', 'audio_type' => 'mp3', 'addr' => $master_path. 'audio/shatri/ayat/murattal/ogg/', 'qari' => 'Abu Bakr al-Shatri',],
			26 => 	['type' => 'murattal', 'play_type' => 'aya', 'audio_type' => 'mp3', 'addr' => $master_path. 'audio/shuraym/Saood_ash-Shuraym_128kbps/', 'qari' => 'Sa`ud ash-Shuraym',],
			27 => 	['type' => 'murattal', 'play_type' => 'aya', 'audio_type' => 'mp3', 'addr' => $master_path. 'audio/shuraym/mp3/', 'qari' => 'Sa`ud ash-Shuraym',],
			28 => 	['type' => 'murattal', 'play_type' => 'aya', 'audio_type' => 'mp3', 'addr' => $master_path. 'audio/shuraym/ogg/', 'qari' => 'Sa`ud ash-Shuraym',],
			29 => 	['type' => 'murattal', 'play_type' => 'aya', 'audio_type' => 'mp3', 'addr' => $master_path. 'audio/sudais/ayat/Abdurrahmaan_As-Sudais_192kbps/', 'qari' => 'Abdur-Rahman as-Sudais',],
			30 => 	['type' => 'murattal', 'play_type' => 'aya', 'audio_type' => 'mp3', 'addr' => $master_path. 'audio/sudais/ayat/murattal/mp3/', 'qari' => 'Abdur-Rahman as-Sudais',],
			31 => 	['type' => 'murattal', 'play_type' => 'aya', 'audio_type' => 'mp3', 'addr' => $master_path. 'audio/sudais/ayat/murattal/ogg/', 'qari' => 'Abdur-Rahman as-Sudais',],
			32 => 	['type' => 'murattal', 'play_type' => 'aya', 'audio_type' => 'mp3', 'addr' => $master_path. 'audio/sudais/ayat/murattal/mp3/', 'qari' => 'Abdur-Rahman as-Sudais',],
			33 => 	['type' => 'murattal', 'play_type' => 'aya', 'audio_type' => 'mp3', 'addr' => $master_path. 'audio/sudais/ayat/murattal/ogg/', 'qari' => 'Abdur-Rahman as-Sudais',],
		];

		return $list;
	}


	public static function get_aya_url($_gari, $_sura, $_aya)
	{

		$_sura = intval($_sura);
		$_aya  = intval($_aya);

		if($_sura < 10)
		{
			$_sura = '00'. $_sura;
		}
		elseif($_sura < 100)
		{
			$_sura = '0'. $_sura;
		}

		if($_aya < 10)
		{
			$_aya = '00'. $_aya;
		}
		elseif($_aya < 100)
		{
			$_aya = '0'. $_aya;
		}
		$url = 'https://dl.salamquran.com/audio/alafasy/ayat/mp3/'. $_sura.$_aya. '.mp3';
		return $url;
	}
}
?>