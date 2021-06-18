-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2021 at 06:22 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wellbeing`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `aid` int(12) NOT NULL,
  `atitle` varchar(32) NOT NULL,
  `acontent` varchar(255) NOT NULL,
  `astatus` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`aid`, `atitle`, `acontent`, `astatus`, `created_at`) VALUES
(1, 'About WellBeing', 'This is to inform you that the website will be down for a little while!', 2, '2021-05-01 14:23:43'),
(2, 'Announcement edit', 'Announcement', 1, '2021-05-01 01:02:17'),
(3, 'Archived', 'This is an archived data which will not be viewed!', 1, '2021-05-01 11:31:55'),
(4, 'Unarchived Announcement!', 'This is an unarchived announcement!', 2, '2021-05-01 11:31:43'),
(37, 'Delete Announcement Edit', 'Delete', 2, '2021-05-01 14:24:17'),
(42, 'Announcement demo', 'Try', 1, '2021-06-10 15:59:57');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `aid` int(12) NOT NULL,
  `atitle` varchar(32) NOT NULL,
  `adesc` varchar(255) NOT NULL,
  `mid` int(12) NOT NULL,
  `atime` time NOT NULL,
  `adate` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `astatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`aid`, `atitle`, `adesc`, `mid`, `atime`, `adate`, `created_at`, `astatus`) VALUES
(5, 'sdsedited', 'mmm', 18, '19:15:00', '2021-04-30', '2021-05-01 21:45:00', 1),
(6, 'Meeting For ADHD', 'The meeting is set so attend on time!', 16, '19:17:00', '2021-04-28', '2021-05-01 21:52:54', 1),
(8, 'Anxiety Meeting', 'The Meeting has been set! Attend it!', 1, '03:42:00', '2021-05-20', '2021-05-01 21:55:03', 2);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `bid` int(12) NOT NULL,
  `cid` int(12) NOT NULL,
  `sid` int(12) NOT NULL,
  `btitle` varchar(255) NOT NULL,
  `bcontent` mediumtext NOT NULL,
  `bimage` text NOT NULL,
  `bstatus` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`bid`, `cid`, `sid`, `btitle`, `bcontent`, `bimage`, `bstatus`, `created_at`) VALUES
(1, 1, 2, 'My fight with depression', 'Back in Aug 2017, I joined a new company after spending four wonderful years at the Singapore General Hospital (SGH). In the nation’s flagship hospital, I was given numerous opportunities to work with some of the brightest healthcare professionals, administrators and IT engineers in the industry. I have debated with a system specialist on the best way to improve our electronic incident reporting system, supported a committee of super senior doctors, and also sat beside an ICU pharmacist to review a medical error.\r\n\r\nAs a junior administrator, I learned a lot from the ways they systematically approach problems in operating a large and complex healthcare organisation. My director and manager gave me the autonomy to make the decisions I could at my level. In my fourth year, I got the chance to oversee the work of a junior executive and associate. I was fairly confident that I would be promoted if I stayed on for just a few more months. Despite these opportunities, I tendered my resignation.\r\n\r\nAs part of my handover , I also developed a syllabus for newbies as I gradually began to see the “big picture” and intentions behind my work. I told HR during the exit interview that I didn’t have anything against my bosses and colleagues. I simply wanted to advance my career in healthcare analytics, an area I was keen on.', 'depression.jpg', 2, '2021-04-29 07:08:09'),
(2, 2, 3, 'When illness is a stepping stone towards positive experiences', 'I used to cope with my troubles by self-harming. I have been self-harming since my teens when I was studying in Junior College. I later pursued my studies in Melbourne, where I fell ill. Hence, part of my recovery story happened in Melbourne, Australia, and then in Singapore, where I decided to come back for treatment.\r\n\r\nI was diagnosed with depression in March 2012, and was later diagnosed with psychosis in June that same year. I still remember how shocked and scared I was when I was diagnosed with psychosis. I thought it meant “psycho” and to me, “psycho” meant crazy. I felt that life was meaningless and that death was the only way out. My sleepless nights caused my concentration in school to be reduced greatly. Getting out of bed to school was a big hassle. However, I still managed to force myself to get up. However, during that period, I felt like a walking zombie, dragging my feet and staring into space during lectures. I was battling with managing with my fast-declining studies and the negative voices asking me to kill myself.\r\n\r\nI surrendered to the voices and attempted suicide a couple of times. But each time I did, there seemed to be another side of me that pulled me away from the brink and seek help. I once heard a low tone voice asking me to walk into fast moving traffic on a busy road. All it took was one step … suddenly, I ‘woke’ up and pulled myself back and called my school counsellor for help.\r\n\r\nI asked myself why I thought that death would solve all my problems. I asked myself why I always sought help and why I always woke up and pulled myself back. As fighting this monster was very taxing, soon, I decided to let go of the ‘rope’ and stop playing tug-of-war.', 'sunshine.jpg', 1, '2021-05-01 09:59:23'),
(3, 4, 4, 'When nothing seems to work', 'I’m A.M. and I have depression and anxiety disorder, or what I call, D+A. This has been my reality for the past three and a half years.\r\n\r\nThe dysphoria started when I was 16. There was a ceaseless cloud of malaise and suicidal thoughts. Anxiety attacks were quotidian. I didn’t know what was wrong with me. Or rather, I didn’t want to admit that I had depression and anxiety disorder.\r\n\r\nI was averse to the idea of seeking help as I was reluctant to acknowledge my condition. I hated that it was a part of me. Thereafter, I started dealing with my condition through unhealthy ways, suffocated by everything around me — people, commitments, and school. I began isolating myself socially and retreated into a bubble. All I could remember was crying myself to sleep just to escape the melancholy, which grew worse with each night. The year 2016 was also the time of my ‘O’ Level examinations, which compelled me to supress every single emotional baggage and personal issue. This denial and self-negligence was the start of everything unpleasant.\r\n\r\nBy Junior College, I could no longer deny that D+A was present in my life. So I reached out for proper treatment. Initially, it felt like everything was finally going in the right direction. But I was mistaken.\r\n\r\nMy treatment entailed medications, counselling and therapies. Juxtaposed with the expectations of recovery, my condition got worse. Every visit to the psychiatrist and psychologist only resulted in higher doses of antidepressants which ironically made me feel worse. I was locked in a suicidal state and my short-term memory significantly degraded temporarily due to the use of anti-anxiety pills. It was a living hell. I was brought to the Emergency Room of IMH twice, missing out on school.', 'anxiety.jpg', 2, '2021-04-29 07:14:20'),
(4, 3, 2, 'From anxiety to schizophrenia: Mental health conditions explained', 'Depression. Bipolar. Anxiety. You’ve probably heard these terms before, but how much do you know about these mental health conditions, and about how they affect people?\r\n\r\nUnderstanding these conditions can help reduce fear and misunderstanding of mental illness, and empower everyone with the knowledge on how to care for their mental health, and that of their loved ones. Read on to find out more about some of the more common conditions. \r\n\r\nWe have compiled this resource using online materials shared by professional and expert groups (full list below). The resources on these pages are meant to be educational, and should not be taken as medical advice. If you suspect you have a mental health concern, seek help from professionals before taking any action. ', 'explained.jpg', 2, '2021-04-29 07:15:25'),
(5, 5, 3, 'Life Goes On', 'Life hit rock bottom for every single member of my family the day my mum took her own life.\r\n\r\nOn 28 July 2018, my brother was diagnosed with delusion disorder. Since then, I had a hunch that my mother might one day take the path that she did. Nevertheless, I tried to brush this thought off as I believed that with my love and support, she would be able to accept and overcome the challenges of coping with my brother’s condition.\r\n\r\nIt is hard to imagine when looking back how I got by the last few months. On hearing the news that day, it felt like I had a brain concussion – the shock, the disbelief, the pain! It was a traumatic experience having to identify her and sign the death certificate. Nothing made sense. She had been just lying next to me the night before, after I had given her a massage, and within hours, she was gone forever! A cold corpse lying in the mortuary for me to kiss her goodbye for the last time.\r\n\r\nIt was agonising to see my frail dad heartbroken, and crying his heart out like I had never seen before. Even though I was devastated, I held back my tears in front of my dad to avoid upsetting him further and ignored my feelings to ensure the funeral arrangements were attended to. It was the last thing I could do for my mum – for us to bid our final farewell to her.\r\n\r\nIf you think things must be difficult during the wake, I can tell you that it was even harder after the funeral. I had suddenly become the head of the household overnight, the pillar for everyone in the family to lean on and the one responsible for ensuring the family was well despite the tragedy. My immediate priority after the incident was the welfare of my dad and brother. My dad is getting on in age. As an ex-stroke patient, I was afraid the blow would be too much for him to take. He could neither sleep nor eat well ever since. He even refused to take his regular medication. I had to step in as I could not allow him to undergo any further mishap or stress that aggravates his health.\r\n\r\nI was also worried about my brother’s condition, which seemed to have worsened with my mum’s sudden death. He became very distanced and quiet. His refusal to seek treatment to-date did not help to alleviate our stress levels. Relations were constantly strained at home as we experienced changes and adjusted to new family dynamics. It was hard to communicate with my brother when everyone’s emotions were running high. Our ignorance about his condition brought the tension to the next level.\r\n\r\nAs I write, it has been almost six months since my mum’s passing. My heart stops whenever I recall the dreadful day. What I have learnt in that time is the importance of support. I would still be living like a zombie, completely dazed, if I had not been open to seeking help and speaking to others as part of my healing process. I realised that I could not handle everything by myself, and that my family needed a lot of support during this difficult period. In order to hold my family together, I reached out to as many resources as I could to tide us through.\r\n\r\nAlthough what I experienced was tremendously painful to deal with, I now accept that life goes on. Everyone has their own challenges to deal with in life. What matters most is how we cope with it, and the attitude we adopt to overcome our hurdles. My family has never regretted not being there for my mum as we constantly spent quality time with her. My mum will always be with us as we continue to hold on to the values she instilled in us. Her early departure just created an opportunity for us to build stronger bonds with my dad now. Being a traditional man, our relationship with dad had always been distanced as displays of open affection were just not my dad’s cup of tea. Since my mum’s demise, dad had made a huge effort to change himself and our relationship with him now is stronger than before. This makes caring for my brother a lot easier when the family is on the same line.', 'life.jpg', 1, '2021-05-01 09:59:20'),
(34, 6, 4, 'Why Caring for Caregivers is an Uphill Battle', 'Why would you get stressed if it’s your duty?”\r\n\r\nI have never had to devote my life to caring for someone who is chronically unwell. But those words struck a chord with me when Maitreyi Nigwekar shared them with me, an example of the response she gets when she is asked about the challenges of rallying support for caregivers and their mental health. \r\n\r\nMany of us at some point in our lives would have experienced the tug between the desire to care for our loved ones, and the stress that comes with that responsibility. Also the ensuing guilt over feeling frustrated at times. \r\n\r\nDealing with those feelings at a personal level is challenging enough; it is even harder when social expectations come into play. As Maitreyi puts, “it is deeply ingrained in us to be there for the family at the cost of your health and your mental health.” \r\n\r\nMaitreyi, who started Adveka Foundation in Mumbai to provide support services to caregivers, is talking about India. But here in Singapore, I recognise the same values in my upbringing, where duty and expectations are deeply intertwined with love and kinship. ', 'care.jpg', 2, '2021-04-29 07:17:41'),
(35, 1, 2, 'How to Talk to Your Partner About Your Depression', 'Depression is hard to comprehend when you’re experiencing it and even harder to explain to those around you. Some days, you may feel like yourself and other days you may struggle to finish a daily task like eat a full meal or take out the trash. \r\n\r\n\r\nMajor depressive disorder may be one of the most common mental health disorders in the United States, but it isn’t always recognizable from the outside and symptoms vary significantly from person to person. If your depression isn’t addressed, it can worsen. This is why it’s important to keep your partner in the loop.\r\n\r\nYour partner should be your advocate, your cheerleader, the person who knows you best, but telling them about your depression can feel awkward, uncomfortable, and stressful. How do you get them to understand the severity of your feelings? How do you tell them without worrying them?\r\n\r\nLearn how to communicate your emotions and struggles with your partner so they can help support you.', 'partnet.jpg', 2, '2021-04-29 07:34:32'),
(36, 2, 3, 'Bipolar 1 Disorder', 'This type of bipolar disorder involves the presence of at least one manic episode. Manic episodes may last seven days or longer or be severe enough that a person requires acute care. People usually experience depressive episodes as well, but they may also have mixed episodes where they experience depression and mania at the same time.', 'bipolar.jpg', 1, '2021-05-01 09:59:16'),
(37, 3, 4, 'How Sociopaths Are Different from Psychopaths', 'While psychopaths are classified as people with little or no conscience, sociopaths do have a limited, albeit weak, ability to feel empathy and remorse. Psychopaths can and do follow social conventions when it suits their needs. Sociopaths are more likely to fly off the handle and react violently whenever they\'re confronted by the consequences of their actions.', 'sociopath.jpg', 2, '2021-04-29 07:34:32'),
(38, 4, 2, 'Helping People With Autism Manage Anxiety', 'About 40% of people with autism spectrum disorder also suffer from significant anxiety. This is the case even though anxiety is not a part of the criteria for diagnosing autism—nor is it one of the descriptive options available for clinicians to use when describing a person\'s autism. Anxiety can play a huge role in the lives of people on the spectrum, controlling the way they interact with the world, and limiting the ways in which other people interact with them.', 'anxiety2.jpg', 2, '2021-04-29 08:14:44'),
(39, 5, 3, 'Myths About ADHDedited', 'ADHD is recognized as a disorder by the majority of professional medical, psychiatric, psychological, and educational associations and organizations in the United States, including the Centers for Disease Control and Prevention, the National Institutes of Health (NIH), the U.S. Department of Education, and the American Psychiatric Association (APA).\r\n\r\n\r\nOne factor that contributes to misunderstandings about ADHD\'s status is that no specific test exists that can definitively identify the disorder. Unlike other medical conditions, a doctor cannot confirm a diagnosis of ADHD with a laboratory or imaging test.  \r\n\r\n\r\nAlthough there is no definitive medical test for diagnosing ADHD, there are clear and specific criteria that must be met for a diagnosis. Doctors and mental health professionals can use these criteria, as well as an in-depth history and detailed information about a person\'s behaviors, to make a reliable diagnosis. \r\n\r\nAnother factor is that ADHD symptoms are not always clearly defined. ADHD exists on a continuum of behaviors. We all experience problems with attention and focus at times, but for an individual with ADHD, these symptoms are severe enough to affect daily functioning.  \r\n\r\nSymptoms of ADHD can also resemble those of other conditions. Pre-existing or undiagnosed medical conditions that could be the cause of a person\'s symptoms must be ruled out before a diagnosis of ADHD can be made. ', 'adhd.jpg', 1, '2021-05-01 21:45:38'),
(40, 6, 4, 'What Is a Schizophrenia Test?', 'Schizophrenia is a serious mental illness causing difficulty in managing emotions and making decisions, the inability to think clearly, and trouble relating and interacting with other people.\r\n\r\nDiagnosing schizophrenia is no easy undertaking. There isn’t a schizophrenia test that can be used for a definitive diagnosis. Also, several other mental illnesses can mimic the symptoms of schizophrenia, and other factors (such as methamphetamine or LSD drug use) may cause schizophrenic-like symptoms.\r\n\r\nAnother obstacle to overcome in the diagnostic process is the denial that many people with schizophrenia develop, not believing that they have the disease. This lack of awareness lends itself to complicating the diagnostic process as well as subsequent treatment efforts. ', 'schizo.jpg', 2, '2021-04-29 07:34:32'),
(41, 1, 2, 'How to Talk to Your Partner About Your Depression', 'Depression is hard to comprehend when you’re experiencing it and even harder to explain to those around you. Some days, you may feel like yourself and other days you may struggle to finish a daily task like eat a full meal or take out the trash. \r\n\r\n\r\nMajor depressive disorder may be one of the most common mental health disorders in the United States, but it isn’t always recognizable from the outside and symptoms vary significantly from person to person. If your depression isn’t addressed, it can worsen. This is why it’s important to keep your partner in the loop.\r\n\r\nYour partner should be your advocate, your cheerleader, the person who knows you best, but telling them about your depression can feel awkward, uncomfortable, and stressful. How do you get them to understand the severity of your feelings? How do you tell them without worrying them?\r\n\r\nLearn how to communicate your emotions and struggles with your partner so they can help support you.', 'partnet.jpg', 1, '2021-05-02 02:48:22');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cid` int(12) NOT NULL,
  `cname` varchar(32) NOT NULL,
  `cdesc` varchar(1000) NOT NULL,
  `crole` tinyint(1) NOT NULL,
  `cstatus` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cid`, `cname`, `cdesc`, `crole`, `cstatus`, `created_at`) VALUES
(1, 'Drepression', 'A mental health disorder characterized by persistently depressed mood or loss of interest in activities, causing significant impairment in daily life. Depression is different from usual mood fluctuations and short-lived emotional responses to challenges in everyday life. Especially when long-lasting and with moderate or severe intensity, depression are slightly different, or they may develop under unique circumstances. Depression can strike at any time, but on average, first appears during the last teens to mid-20s. Women are more likely than men to experience depression.  ', 1, 2, '2021-04-29 11:19:58'),
(2, 'Bipolar Disorder', 'Bipolar disorders are brain disorders that cause changes in a person\'s mood, energy and ability to function. Bipolar disorder is a category that includes three different conditions - bipolar I, bipolar II and cyclothymic disorder. People with bipolar disorders have extreme and intense emotional states that occur at distinct times, called mood episodes. These mood episodes are categorized as manic, hypomanic or depressive. People with bipolar disorders generally have periods of normal mood as well. Bipolar disorders can be treated, and people with these illnesses can lead full and productive lives. ', 1, 2, '2021-04-29 06:58:06'),
(3, 'Sociopathy', 'Sociopathy refers to a pattern of antisocial behaviors and attitudes, including manipulation, deceit, aggression, and a lack of empathy for others. People with antisocial personality disorder tend to antagonize, manipulate or treat others harshly or with callous indifference. They show no guilt or remorse for their behavior. Sociopathy is a non-diagnostic term, and it is not synonymous with \"psychopathy\" though the overlap leads to frequent confusion. Sociopaths may or may not break the law, but by exploiting and manipulating others, they violate the trust that the human enterprise runs on. Those with antisocial personality disorder (ASPD) may begin to show symptoms in childhood, but the condition can\'t be diagnosed until adolescence or adulthood. ', 1, 2, '2021-04-29 06:58:08'),
(4, 'Anxiety', 'The American Psychological Association (APA) defines anxiety as \"an emotion characterized by feelings of tension, worried thoughts and physical changes like increased blood pressure.\" Anxiety is body\'s natural response to stress. It\'s normal part of life to experience occasional anxiety. If it\'s an excessive, irrational dread of everyday situations, it can be disabling. When anxiety interferes with daily activities, a person will experience anxiety disorder. Knowing the difference between normal feelings of anxiety and an anxiety disorder requiring medical attention can help a person identify and treat the condition. ', 1, 2, '2021-04-29 06:58:12'),
(5, 'ADHD edited', 'ADHD is a disorder marked by an ongoing pattern of inattention and/or hyperactivity-impulsivity that interferes with functioning or development. It is one of the most common mental disorders affecting children and also many adults. ADHD symptoms can appear as early as between the ages of 3 and 6 and can continue through adolescence and adulthood. It is more common among in boys than girls. ADHD symptoms can change over time as a person ages. Scientists have not yet identifies the specific causes of ADHD. There is evidence that genetics contribute to ADHD symptoms of ADHD include inattention (not being to keep focus), hyperactivity and impulsivity. ', 1, 2, '2021-04-30 22:11:58'),
(6, 'Schizophrenia', 'Schizophrenia is a serious mental illness that affects how a person thinks, feels and behaves. People with schizophrenia may seem like they have lost touch with reality. It involves psychosis, a type of mental illness in which a person can\'t tell what\'s real from what\'s imagined. Contrary to popular belief, schizophrenia is not a split or multiple personality. If left untreated, the symptoms can be persistent and disabling. However, effective treatments are available. When delivered in a timely, coordinated, and sustained manner, treatment can help affected individuals to engage in school or work, achieve independence and enjoy personal relationships. ', 1, 2, '2021-05-02 01:07:54'),
(15, 'Archived Category', 'archived', 1, 1, '2021-05-02 01:09:57');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `eid` int(12) NOT NULL,
  `pid` int(12) DEFAULT NULL,
  `sid` int(12) DEFAULT NULL,
  `etitle` varchar(255) NOT NULL,
  `edesc` varchar(1000) NOT NULL,
  `estatus` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`eid`, `pid`, `sid`, `etitle`, `edesc`, `estatus`, `created_at`) VALUES
(28, 0, 2, 'Quite Impressed!', 'I\'m very impressed that I got an opportunity to post my knowledge here!', 2, '2021-06-10 16:21:14'),
(29, 1, NULL, 'It\'s great!', 'I am seeing the improvement! I am very happy for it! edit', 2, '2021-06-10 16:21:11'),
(30, 0, 3, 'It\'s been fun!', 'I\'m gaining various experience so I\'m quite grateful for that! e', 2, '2021-05-01 09:59:03'),
(31, 2, 0, 'My Covid Experience!', 'When the lockdown started, I was ecstatic. My final year of school had finished early, exams were cancelled, the sun was shining. I was happy, and confident I would be OK. After all, how hard could staying at home possibly be? After a while, the reality of the situation started to sink in.\r\n\r\nThe novelty of being at home wore off and I started to struggle. I suffered from regular panic attacks, frozen on the floor in my room, unable to move or speak. I had nightmares most nights, and struggled to sleep. It was as if I was stuck, trapped in my house and in my own head. I didn\'t know how to cope.\r\n\r\nHowever, over time, I found ways to deal with the pressure. I realised that lockdown gave me more time to the things I loved, hobbies that had been previously swamped by schoolwork. I started baking, drawing and writing again, and felt free for the first time in months. I had forgotten how good it felt to be creative. I started spending more time with my family. ', 2, '2021-05-01 01:14:00'),
(33, 0, 2, 'add demo', 'demo edited', 1, '2021-05-02 02:15:45'),
(34, 0, 2, 'Experience Demo edit', 'demo', 1, '2021-05-02 02:47:53');

-- --------------------------------------------------------

--
-- Table structure for table `journals`
--

CREATE TABLE `journals` (
  `jid` int(12) NOT NULL,
  `pid` int(12) NOT NULL,
  `jtopic` varchar(32) NOT NULL,
  `jdesc` varchar(255) NOT NULL,
  `written_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `journals`
--

INSERT INTO `journals` (`jid`, `pid`, `jtopic`, `jdesc`, `written_at`) VALUES
(25, 6, 'About Today', '“I awoke this morning with devout thanksgiving for my friends, the old and the new.”', '2021-04-29 15:04:20'),
(26, 1, 'I\'m grate', 'desc', '2021-05-02 01:15:21');

-- --------------------------------------------------------

--
-- Table structure for table `medications`
--

CREATE TABLE `medications` (
  `mdid` int(12) NOT NULL,
  `mid` int(12) NOT NULL,
  `sid` int(12) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `mcontent` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `mdstatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medications`
--

INSERT INTO `medications` (`mdid`, `mid`, `sid`, `mname`, `mcontent`, `created_at`, `mdstatus`) VALUES
(1, 1, 2, 'xx', 'ssd', '2021-04-30 16:04:18', 1),
(2, 1, 2, 'ss', 'mm', '2021-05-01 22:32:39', 2),
(3, 1, 2, 'mmm', 'mmm', '2021-05-01 22:32:30', 2),
(4, 1, 2, 'mmmediteded', 'mmm', '2021-05-01 22:52:39', 1),
(5, 1, 2, 'demo', 'demo', '2021-05-02 02:49:30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `meetings`
--

CREATE TABLE `meetings` (
  `mid` int(12) NOT NULL,
  `mtitle` varchar(32) NOT NULL,
  `mdesc` varchar(255) DEFAULT NULL,
  `sid` int(12) NOT NULL,
  `pid` int(12) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `attend_status` tinyint(1) DEFAULT NULL,
  `mstatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meetings`
--

INSERT INTO `meetings` (`mid`, `mtitle`, `mdesc`, `sid`, `pid`, `created_date`, `attend_status`, `mstatus`) VALUES
(1, 'Meeting For Anxiety', 'The meeting for anxiety has been set!', 2, 1, '2021-05-02 02:48:38', 2, 2),
(16, 'Meeting for ADHD', 'Meeting set request for appointment!', 4, 3, '2021-05-01 01:11:24', 1, 2),
(17, 'Meeting for bipolar disorder', 'Request for the appointment!', 4, 2, '2021-06-10 16:09:36', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `pid` int(12) NOT NULL,
  `pfirstname` varchar(32) NOT NULL,
  `pmiddlename` varchar(32) NOT NULL,
  `psurname` varchar(32) NOT NULL,
  `pusername` varchar(32) NOT NULL,
  `ppass` varchar(64) NOT NULL,
  `pcontact` varchar(32) NOT NULL,
  `pemail` varchar(32) NOT NULL,
  `pstatus` tinyint(1) NOT NULL,
  `pimage` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`pid`, `pfirstname`, `pmiddlename`, `psurname`, `pusername`, `ppass`, `pcontact`, `pemail`, `pstatus`, `pimage`) VALUES
(1, 'Isaac', '', 'Thapa', 'isaac.thapa@wellbeing.com', '$2y$10$/hXSVRwI.1ExHarWogW4Le0Y./QFqq/5bzMcXd/HBOijFMrMFEhxe', '+977+977 989898989', 'isaac.thapa@gmail.com', 2, 'isaac1.jpg'),
(2, 'Smritee', '', 'Pandey', 'smritee_patient@wellbeing.com', '$2y$10$N1wDhbPPcmceoyRuSZZbmOZd2wbJg2xs3vScLl6x5WRE2teYHSai.', '+977983456788', 'smritee.pandey@gmail.com', 2, 'sudeshna.jpg'),
(3, 'Sarita', '', 'Pandey', 'sarita.pandey', '$2y$10$Lnv3OfEeHyLrKdR4RAouueclcLEgSf8VgojqjYNnLQIi1AIVHugny', '+9779849494949', 'sarita.pandey@gmail.com', 2, NULL),
(10, 'Sudeshna', '', 'Pandey', 'sudeshna.ev', '$2y$10$.sQlHCUg4CFZVOkt8hrS9e/x834MFCVrcZ02Zc3iyKINiE1AtrJji', '+9779860902072', 'sudeshna.pandey100@gmail.com', 2, NULL),
(11, 'SudeshnaDemo', '', 'Pandey', 'sudeshna_ev', '$2y$10$MoeBGymyHSnH7gdUa8i1WuTseUWcEr6RIk1GHxjYORA56rnnBdk4S', '+9779860902072', 'hrithikhadka09990@gmail.com', 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `qid` int(12) NOT NULL,
  `cid` int(12) NOT NULL,
  `question` varchar(255) NOT NULL,
  `ans_one` varchar(255) NOT NULL,
  `ans_two` varchar(255) NOT NULL,
  `ans_three` varchar(255) NOT NULL,
  `high_symp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qid`, `cid`, `question`, `ans_one`, `ans_two`, `ans_three`, `high_symp`) VALUES
(56, 6, 'Do you get the sense that others are controlling your emotions?', 'Never', 'null', 'null', 'Often '),
(57, 6, 'Do you struggle to keep up with daily living tasks?', 'Never', 'null', 'null', 'Often '),
(58, 6, 'Do you find it difficult to organize or keep track of your thinking? ', 'Never', 'null', 'null', 'Often '),
(59, 6, 'Do you feel that you have little in common with family and friends?', 'Never', 'null', 'null', 'Often '),
(60, 6, 'Is it very difficult to express yourself in words that others can understand? edited', 'Never', 'null', 'null', 'Often '),
(61, 6, 'Do you believe in more than one thing about reality and nobody else seems to believe in?', 'Never', 'null', 'null', 'Often '),
(62, 6, 'Do you feel like you are being treated unfairly because others are jealous of your special abilities?', 'Never', 'null', 'null', 'Often '),
(63, 6, 'Have you ever felt that you don\'t exist, the world does not exist, or that you are dead?', 'Never', 'null', 'null', 'Often '),
(65, 5, 'Do you have difficulty in sustaining your attention while doing something for work, school, a hobby, or fun activity (eg. remaining focused during lectures, lengthy reading or conversations)?', 'Never', 'null', 'null', 'Often '),
(66, 5, 'Are you easily distracted by external stimuli, like something in your environment or unrelated thoughts?', 'Never', 'null', 'null', 'Often '),
(67, 5, 'Do you often fail to give close attention to details, or make careless mistakes in things such as schoolwork, at work, or during other activities?', 'Never', 'null', 'null', 'Often '),
(68, 5, 'Are you unable to play or engage in leisurely activities quietly?', 'Never', 'null', 'null', 'Often '),
(69, 5, 'How often do you feel restless -- like you want to get out and do something?', 'Never', 'null', 'null', 'Often '),
(70, 5, 'Do you tend to avoid or delay getting started on a new important task?', 'Never', 'null', 'null', 'Often '),
(71, 5, 'Do you have difficulty unwinding and relaxing when you have time to yourself?', 'Never', 'null', 'null', 'Often '),
(72, 5, 'Do you frequently misplace things things (or have difficulty finding them)?', 'Never', 'null', 'null', 'Often '),
(73, 5, 'How often do you feel restless or fidgety?', 'Never', 'null', 'null', 'Often '),
(74, 5, 'How often do you depend on others to keep your life in order and attend to details? ', 'Never', 'null', 'null', 'Often '),
(75, 4, 'Do you experience repetitive and persistent thoughts that are upsetting and unwanted?', 'Never', 'null', 'null', 'Often '),
(76, 4, 'Do you experience strong fear that causes panic, shortness of breath, chest pains, a pounding heart, sweating, shaking, nausea, dizziness, and/or fear of dying?', 'Never', 'null', 'null', 'Often '),
(77, 4, 'How often have you been bothered by not being able to stop or control worrying?', 'Never', 'null', 'null', 'Often '),
(78, 4, 'Are you bothered for not being able to relax?', 'Never', 'null', 'null', 'Often '),
(79, 4, 'How often have you been bothered by being so restless that it is hard to sit still?', 'Never', 'null', 'null', 'Often '),
(80, 4, 'Have you had trouble falling or staying asleep?', 'Never', 'null', 'null', 'Often '),
(81, 4, 'Have you felt shaky or wobbly, experienced numbness or tingling in your body, or had chills or hot flashes while feeling anxious? ', 'Never', 'null', 'null', 'Often '),
(82, 4, 'Have you ever found yourself avoiding situations that you think may cause more anxiety?', 'Never', 'null', 'null', 'Often '),
(83, 4, 'Have you had more difficulty concentrating on work or school than usual? ', 'Never', 'null', 'null', 'Often '),
(84, 4, 'When someone snaps at you, do you spend the rest of the day thinking about it?', 'Never', 'null', 'null', 'Often '),
(85, 3, 'Do you repeatedly lie to or trick others for your own gain or pleasure? ', 'Never', 'null', 'null', 'Often '),
(86, 3, 'If you hurt someone else\'s feelings, do you lack remorse or guilt? ', 'Never', 'null', 'null', 'Often '),
(87, 3, 'Do you fail to plan ahead?', 'Never', 'null', 'null', 'Often '),
(88, 3, 'Are you aggressive?', 'Never', 'null', 'null', 'Often '),
(89, 3, 'Do you engage in unnecessary risk-taking or dangerous behavior with no regard for the safety of self or others?', 'Never', 'null', 'null', 'Often '),
(90, 3, 'Do you consider yourself superior to others?', 'Never', 'null', 'null', 'Often'),
(91, 3, 'Do you charm or wit to manipulate others for your own benefit?', 'Never', 'null', 'null', 'Often'),
(92, 3, 'Are you generally a anxious person?', 'Never', 'null', 'null', 'Often'),
(93, 3, 'Are you responsive to others socially?', 'Never', 'null', 'null', 'Often'),
(94, 3, 'Do you have delusions or other types of irrational thinking?', 'Never', 'null', 'null', 'Often'),
(95, 2, 'Do you suffer from extreme mood changes?', 'Never', 'null', 'null', 'Often'),
(96, 2, 'Has anyone in your family ever been diagnosed with Bipolar Disorder?', 'No', 'null', 'null', 'Yes'),
(97, 2, 'Have you experienced the feeling of euphoria or of being \"on top of the world\"?', 'Never', 'null', 'null', 'Often'),
(98, 2, 'Are you agitated all the time or feel physically low?', 'Never', 'null', 'null', 'Often'),
(99, 2, 'Do you feel more confident and capable?', 'Never', 'null', 'null', 'Often'),
(100, 2, 'Do you see things in a new and exciting light?', 'Never', 'null', 'null', 'Often'),
(101, 2, 'Do you face difficulty in sleeping or do you oversleep?', 'Never', 'null', 'null', 'Sometimes'),
(102, 2, 'Do you feel very creative with ideas and plans?', 'Never', 'null', 'null', 'Often '),
(103, 2, 'Do you go through periods of great optimism and other periods of great pessimism?', 'Never', 'null', 'null', 'Often'),
(104, 2, 'Do you spend or wish to spend significant amounts of money?', 'Never', 'null', 'null', 'Often'),
(105, 1, 'Are you suffering from feelings of sadness, hopelessness or emptiness?', 'Never', 'null', 'null', 'Often'),
(106, 1, 'Do you find it hard to find pleasure in activities you used to enjoy?', 'Never', 'null', 'null', 'Often'),
(107, 1, 'Has your appetite changed?', 'Never', 'null', 'null', 'Often'),
(108, 1, 'Are you lacking energy and motivation?', 'Never', 'null', 'null', 'Often'),
(109, 1, 'Have you had thoughts about harming yourself or ending your life?', 'Never', 'null', 'null', 'Often'),
(110, 1, 'Do you feel guilty or tearful for no reason?', 'Never', 'null', 'null', 'Often'),
(111, 1, 'Have you recently suffered a traumatic event, such as a bereavement?', 'Never', 'null', 'null', 'Often'),
(112, 1, 'Do you find yourself avoiding friends and family?', 'Never', 'null', 'null', 'Often'),
(113, 1, 'Do you feel more tired than usual?', 'Never', 'null', 'null', 'Often'),
(114, 1, 'Do you feel upset or annoyed at little things?', 'Often ', 'null', 'null', 'Never'),
(117, 6, 'Have you seen unusual things like flashes, flames, blinding light, or geometric figures?', 'Never', 'null', 'null', 'One'),
(118, 6, 'Do you ever hear or see things that others cannot?', 'Never', 'null', 'null', 'Often ');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `rid` int(12) NOT NULL,
  `crole` int(12) DEFAULT NULL,
  `sid` int(12) DEFAULT NULL,
  `pid` int(12) DEFAULT NULL,
  `rfirstname` varchar(32) NOT NULL,
  `rmiddlename` varchar(32) DEFAULT NULL,
  `rsurname` varchar(32) NOT NULL,
  `rcontact` varchar(32) NOT NULL,
  `remail` varchar(32) NOT NULL,
  `rquali` varchar(255) DEFAULT NULL,
  `rdesc` varchar(255) DEFAULT NULL,
  `approval` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `made_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`rid`, `crole`, `sid`, `pid`, `rfirstname`, `rmiddlename`, `rsurname`, `rcontact`, `remail`, `rquali`, `rdesc`, `approval`, `status`, `made_at`) VALUES
(115, 2, 24, 0, 'Saral', NULL, 'Raut', '+9779860902072', 'saral@gmail.com', ' ', 'Can you please update my meet-link?', 2, 2, '2021-05-02 01:17:19'),
(116, 2, 24, 0, 'Saral', NULL, 'Raut', '+9779860902072', 'saral@gmail.com', ' ', 'Can you provide me the detail of the patient?', 2, 2, '2021-05-02 01:17:15'),
(118, 4, 25, 0, 'Rima', NULL, 'Dahal', '9898989898', 'rimadahal@gmail.com', ' ', 'Can you please change my name?', 2, 2, '2021-04-30 13:47:12'),
(119, 3, NULL, 7, 'Isaac', NULL, 'Thapa', '+977+977 989898989', 'isaac.thapa@gmail.com', ' ', 'Can you please arrange a meeting with doctor?', 2, 2, '2021-04-30 13:59:20'),
(120, 3, NULL, 7, 'Isaac', NULL, 'Thapa', '+977+977 989898989', 'isaac.thapa@gmail.com', ' ', 'Can you send me the details of the doctor with whom my meetings has been assigned?', 2, 2, '2021-04-30 14:00:02'),
(122, 5, 0, 0, 'Sudeshna', '', 'Pandey', '+977987867555', 'sude@gmail.com', '', 'mm', 1, 2, '2021-05-01 08:10:11'),
(130, 5, 0, 0, 'Sudeshna', '', 'Pandey', '+977 9898989898', 'sudesh@gmail.comedit2', '', 'asdasd', 1, 2, '2021-05-01 14:19:17'),
(131, 6, 0, 0, 'Sudeshna', '', 'Pandey', '+977 9898989898', 'sudesh@gmail.comedit2', 'samplePDF23.pdf', 'adasdsa', 1, 2, '2021-05-01 14:20:41'),
(132, 2, 2, 0, 'Saral', NULL, 'Raut', '+9779860902072', 'saral@gmail.com', ' ', 'Can you appoint me the meeting?', 2, 2, '2021-05-01 21:56:30'),
(134, 4, 3, 0, 'Rima', NULL, 'Dahal', '9898989898', 'rimadahal@gmail.com', ' ', 'can you unarchive my anxiety post?\r\n', 1, 2, '2021-05-01 16:12:08'),
(136, 2, 2, 0, 'Saral', NULL, 'Raut', '+9779860902072', 'saral@gmail.com', ' ', 'Can you appoint me with the new patient?', 1, 2, '2021-05-01 21:56:08'),
(141, 3, NULL, 1, 'Isaac', NULL, 'Thapa', '+977+977 989898989', 'isaac.thapa@gmail.com', ' ', 'Can request demo', 1, 2, '2021-05-02 02:50:43'),
(142, 5, 0, 0, 'Sudarshna', '', 'Pandey', '+9777045162313', 'surapandey@gmail.com', '', 'mm', 1, 2, '2021-06-10 15:23:28'),
(143, 6, 0, 0, 'Shruti', '', 'Pandey', '+9778878787878', 'shrutii@gmail.com', 'samplePDF27.pdf', 'ss', 1, 2, '2021-06-10 15:41:41');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `sid` int(12) NOT NULL,
  `sfirstname` varchar(32) NOT NULL,
  `smiddlename` varchar(32) DEFAULT NULL,
  `ssurname` varchar(32) NOT NULL,
  `susername` varchar(32) NOT NULL,
  `spass` varchar(64) NOT NULL,
  `scontact` varchar(32) NOT NULL,
  `semail` varchar(32) NOT NULL,
  `meet_link` varchar(32) DEFAULT NULL,
  `simage` text DEFAULT NULL,
  `srole` tinyint(1) NOT NULL,
  `sstatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`sid`, `sfirstname`, `smiddlename`, `ssurname`, `susername`, `spass`, `scontact`, `semail`, `meet_link`, `simage`, `srole`, `sstatus`) VALUES
(1, 'Sudeshna', '', 'Pandey', 'admin', '$2y$10$Wf.TYh7hQHpvcjzzjSAg8Ows63osl2c.oN4YaJc6bmEHsvMYwFpWW', '+977 9898989898', 'sudesh@gmail.comedit2', 'meet.google.com/zxy-sfga-ncf', 'sudeshna4.jpg', 1, 2),
(2, 'Saral', '', 'Raut', 'saral_doctor@wellbeing.com', '$2y$10$UKWibun88c3s7kzf4N2GNOrJPW0Hn7GjeatspV7CzgrFrSXHdXXFy', '+9779860902072', 'saral@gmail.com', 'meet.google.com/zxy-sfga-ncf', 'saral.jpg', 2, 2),
(3, 'Rima', '', 'Dahal', 'rima_blogger@wellbeing.com', '$2y$10$iem/OoNrWI528MG7ORCekueg8mqilQyf876MbBMAfNYopRQCTLwiu', '9898989898', 'rimadahal@gmail.com', NULL, 'rima.jpg', 4, 2),
(4, 'Sudarshan', '', 'Pandey', 'sudarshan_doctor@wellbeing.com', '$2y$10$MScaX/ElY089k2PJQiQ.AO57Ebjjw1y46KWJTLexkVgItNFuW.KZS', '+977 9841414141', 'sudarshna.pandey@gmail.comedit', 'meet.google.com/zxy-sfga-ncf', 'saral.jpg', 2, 2),
(5, 'Test', NULL, 'Test', 'disabled.account', '$2y$10$9xfYz8if9pv4JS5scydaqOuFtSap2UxAJv6DirbbSRkL0AxeyzgLG', '+977 989898999', 'disable.account@gmail.com', NULL, NULL, 4, 1),
(31, 'Sudeshna', '', 'Pandey', 'sudeshna77_doctor@wellbeing.com', '$2y$10$aIohjc2OxNwSEXnlAYlU5OObCJ6XwzSW1j6A6jCfNgjyCFi8qPAgm', '+9779860902072', 'sudeshnapandey8@gmail.comedit', 'meet.google.com/zxy-sfga-ncf', NULL, 2, 2),
(32, 'Sudeshna', '', 'Pandey', 'sudeshna.blogger', '$2y$10$iv/lIix3hTDqSAA7wyiglePP3KyaOznDkMO3WvzWuKGuwQd0ujAxi', '9898989898', 'sudeshna.pandey.blogger@yahoo.co', NULL, NULL, 4, 2),
(33, 'Sudeshna', '', 'Pandey', 'sudeshna88_doctor@wellbeing.com', '$2y$10$8BzDOBKqxBlrQ9YGjC6ecONkMwr8ZZo4nWW2gU2LAlABMJF.oMolq', '+977981253647', 'sudeshnapandey8@gmail.com', 'meet.google.com/zxy-sfga-ncf', NULL, 2, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `journals`
--
ALTER TABLE `journals`
  ADD PRIMARY KEY (`jid`);

--
-- Indexes for table `medications`
--
ALTER TABLE `medications`
  ADD PRIMARY KEY (`mdid`);

--
-- Indexes for table `meetings`
--
ALTER TABLE `meetings`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `aid` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `aid` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `bid` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cid` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `eid` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `journals`
--
ALTER TABLE `journals`
  MODIFY `jid` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `medications`
--
ALTER TABLE `medications`
  MODIFY `mdid` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `meetings`
--
ALTER TABLE `meetings`
  MODIFY `mid` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `pid` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `qid` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `rid` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `sid` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
