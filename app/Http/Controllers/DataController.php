<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function Data()
    {
        $blogs = [

            [
                'id' => 1,
                'title' => 'Trump Announces Presidential Campaign for 2024',
                'author' => 'Jane Doe',
                'content' => 'Donald Trump officially announces his run for the 2024 U.S. presidential elections during a rally in Florida.',
                'category' => 'Politics',
                'img' => 'https://images.seattletimes.com/wp-content/uploads/2024/10/202410201444MCT_____PHOTO____US-NEWS-PA-TRUMP-ARNOLD-PALMER-GET.jpg?d=2040x1360',
                'published_at' => '2024-12-01',
                'is_new' => true,
            ],
            [
                'id' => 2,
                'title' => 'Real Madrid Secures Victory Against Barcelona',
                'author' => 'John Smith',
                'content' => 'In an electrifying El Clásico, Real Madrid triumphed over Barcelona with a last-minute goal.',
                'category' => 'Football',
                'img' => 'https://img.20mn.fr/5OoGHC4kR-il-7Uh1-ilnCk/1444x920_editorial-use-only-no-use-with-unauthorised-audio-video-data-fixture-lists-outside-the-eu-club-league-logos-or-live-services-online-in-match-use-limited-to-45-images-15-in-extra-time-no-use-to-emulate-moving-images-no-use-in-betting-games-or-single-club-league-player-publications-services-mandatory-credit-photo-by-bagu-blanco-pressinphoto-shutterstock-14970378cl-kylian-mbappe-of-real-madrid-athletic-club-v-real-madrid-la-liga-ea-sports-match-date-19-football-san-mames-stadium-bilbao-spain-4-dec-2024-shutterstock-editorial-athletic-club-v-real-madrid-l-14970378cl-editorial-use-only-no-use-with-unauthorised-audio-video-data-fixture-lists-outside-the-eu-club-league-logos-or-live-services-online-in-match-use-limited-to-45-images-15-in-extra-time-no-use-to-emulate-moving-images-no-use-in-betting-games-or-2412051425',
                'published_at' => '2024-11-25',
                'is_new' => true,
            ],
            [
                'id' => 3,
                'title' => 'Moroccan King Mohammed VI Opens New Economic Summit',
                'author' => 'Ali Hassan',
                'content' => 'King Mohammed VI inaugurated the annual economic summit in Rabat, focusing on regional trade collaborations.',
                'category' => 'Politics',
                'img' => 'https://static01.nyt.com/images/2023/09/12/multimedia/12morocco-king-1-fmgq/12morocco-king-1-fmgq-mediumSquareAt3X.jpg',
                'published_at' => '2024-11-20',
                'is_new' => true,
            ],
            [
                'id' => 4,
                'title' => 'France vs Argentina: A Thrilling World Cup Final',
                'author' => 'Emily Brown',
                'content' => 'Relive the dramatic World Cup final where Argentina edged past France in an epic penalty shootout.',
                'category' => 'Football',
                'img' => 'https://e0.365dm.com/22/12/2048x1152/skysports-kylian-mbappe-lionel-messi_6000325.jpg?20221218151140',
                'published_at' => '2024-11-15',
                'is_new' => false,
            ],
            [
                'id' => 5,
                'title' => 'Vladimir Putin Discusses Global Energy Crisis',
                'author' => 'Sarah Johnson',
                'content' => 'Russian President Vladimir Putin addresses the global energy crisis and its implications at the Moscow Energy Forum.',
                'category' => 'Politics',
                'img' => 'https://www.ledevoir.com/documents/image/vladimir-poutine.jpg',
                'published_at' => '2024-11-10',
                'is_new' => false,
            ],
            [
                'id' => 6,
                'title' => 'Manchester United Transfers: Big Moves in 2024',
                'author' => 'Alex Carter',
                'content' => 'Manchester United signs promising talents ahead of the 2024 season, aiming to reclaim their dominance in Europe.',
                'category' => 'Football',
                'img' => 'https://i.eurosport.com/2024/12/01/4068124-82500128-2560-1440.jpg',
                'published_at' => '2024-11-05',
                'is_new' => false,
            ],
            [
                'id' => 7,
                'title' => 'Google’s Latest AI Advancements Unveiled',
                'author' => 'Chris Evans',
                'content' => 'Google announces cutting-edge updates to its AI technology, focusing on healthcare and robotics.',
                'category' => 'Technology',
                'img' => 'https://mylittlebigweb.com/wp-content/uploads/2024/01/algorithme-google-jpg.webp',
                'published_at' => '2024-10-25',
                'is_new' => false,
            ],
            [
                'id' => 8,
                'title' => 'The Importance of Cybersecurity in Modern Businesses',
                'author' => 'Rachel Adams',
                'content' => 'Understand why cybersecurity is crucial and how businesses can protect their data from increasing threats.',
                'category' => 'Security',
                'img' => 'https://www.mtu.edu/computing/cybersecurity/images/what-is-cybersecurity-banner1600.jpg',
                'published_at' => '2024-10-20',
                'is_new' => false,
            ],
            [
                'id' => 9,
                'title' => 'UN Releases Report on Renewable Energy Progress',
                'author' => 'Mark Taylor',
                'content' => 'The UN highlights progress in renewable energy adoption and the challenges that lie ahead.',
                'category' => 'Environment',
                'img' => 'https://www.shipspotting.com/photos/big/7/4/5/384547.jpg?cb=0',
                'published_at' => '2024-10-15',
                'is_new' => false,
            ],
            [
                'id' => 10,
                'title' => 'Neymar’s Stellar Performance for Al-Hilal',
                'author' => 'James Wilson',
                'content' => 'Brazilian superstar Neymar dazzles fans with a hat-trick, leading Al-Hilal to victory in the Saudi Pro League.',
                'category' => 'Football',
                'img' => 'https://assets-fr.imgfoot.com/media/cache/642x382/neymar-2324.jpg',
                'published_at' => '2024-12-03',
                'is_new' => false,
            ],
            [
                'id' => 11,
                'title' => 'SpaceX to Launch Next-Gen Starship Rocket',
                'author' => 'Anna Clark',
                'content' => 'SpaceX announces the launch of its new Starship rocket, aiming for Mars colonization in the near future.',
                'category' => 'Science',
                'img' => 'https://cdn.sortiraparis.com/images/80/88384/620293-espace-spacex-envoie-143-satellites-en-orbite-grace-a-une-seule-fusee.jpg',
                'published_at' => '2024-12-04',
                'is_new' => true,
            ],
            [
                'id' => 12,
                'title' => 'Paris Fashion Week Highlights Sustainability',
                'author' => 'Sophia Lee',
                'content' => 'The latest Paris Fashion Week emphasizes sustainable practices in high fashion, setting a trend for the industry.',
                'category' => 'Fashion',
                'img' => 'https://cache.cosmopolitan.fr/data/fichiers/59/saint-laurent-tour-eiffel-podium.jpg',
                'published_at' => '2024-12-02',
                'is_new' => false,
            ],


        ];

        return view('welcome', compact('blogs'));
    }
    public function BlogData()
    {
        $blogs = [

            [
                'id' => 1,
                'title' => 'Trump Announces Presidential Campaign for 2024',
                'author' => 'Jane Doe',
                'content' => 'Donald Trump officially announces his run for the 2024 U.S. presidential elections during a rally in Florida.',
                'category' => 'Politics',
                'img' => 'https://images.seattletimes.com/wp-content/uploads/2024/10/202410201444MCT_____PHOTO____US-NEWS-PA-TRUMP-ARNOLD-PALMER-GET.jpg?d=2040x1360',
                'published_at' => '2024-12-01',
                'is_new' => false,
            ],
            [
                'id' => 2,
                'title' => 'Real Madrid Secures Victory Against Barcelona',
                'author' => 'John Smith',
                'content' => 'In an electrifying El Clásico, Real Madrid triumphed over Barcelona with a last-minute goal.',
                'category' => 'Football',
                'img' => 'https://img.20mn.fr/5OoGHC4kR-il-7Uh1-ilnCk/1444x920_editorial-use-only-no-use-with-unauthorised-audio-video-data-fixture-lists-outside-the-eu-club-league-logos-or-live-services-online-in-match-use-limited-to-45-images-15-in-extra-time-no-use-to-emulate-moving-images-no-use-in-betting-games-or-single-club-league-player-publications-services-mandatory-credit-photo-by-bagu-blanco-pressinphoto-shutterstock-14970378cl-kylian-mbappe-of-real-madrid-athletic-club-v-real-madrid-la-liga-ea-sports-match-date-19-football-san-mames-stadium-bilbao-spain-4-dec-2024-shutterstock-editorial-athletic-club-v-real-madrid-l-14970378cl-editorial-use-only-no-use-with-unauthorised-audio-video-data-fixture-lists-outside-the-eu-club-league-logos-or-live-services-online-in-match-use-limited-to-45-images-15-in-extra-time-no-use-to-emulate-moving-images-no-use-in-betting-games-or-2412051425',
                'published_at' => '2024-11-25',
                'is_new' => false,
            ],
            [
                'id' => 3,
                'title' => 'Moroccan King Mohammed VI Opens New Economic Summit',
                'author' => 'Ali Hassan',
                'content' => 'King Mohammed VI inaugurated the annual economic summit in Rabat, focusing on regional trade collaborations.',
                'category' => 'Politics',
                'img' => 'https://static01.nyt.com/images/2023/09/12/multimedia/12morocco-king-1-fmgq/12morocco-king-1-fmgq-mediumSquareAt3X.jpg',
                'published_at' => '2024-11-20',
                'is_new' => true,
            ],
            [
                'id' => 4,
                'title' => 'France vs Argentina: A Thrilling World Cup Final',
                'author' => 'Emily Brown',
                'content' => 'Relive the dramatic World Cup final where Argentina edged past France in an epic penalty shootout.',
                'category' => 'Football',
                'img' => 'https://e0.365dm.com/22/12/2048x1152/skysports-kylian-mbappe-lionel-messi_6000325.jpg?20221218151140',
                'published_at' => '2024-11-15',
                'is_new' => false,
            ],
            [
                'id' => 5,
                'title' => 'Vladimir Putin Discusses Global Energy Crisis',
                'author' => 'Sarah Johnson',
                'content' => 'Russian President Vladimir Putin addresses the global energy crisis and its implications at the Moscow Energy Forum.',
                'category' => 'Politics',
                'img' => 'https://www.ledevoir.com/documents/image/vladimir-poutine.jpg',
                'published_at' => '2024-11-10',
                'is_new' => false,
            ],
            [
                'id' => 6,
                'title' => 'Manchester United Transfers: Big Moves in 2024',
                'author' => 'Alex Carter',
                'content' => 'Manchester United signs promising talents ahead of the 2024 season, aiming to reclaim their dominance in Europe.',
                'category' => 'Football',
                'img' => 'https://i.eurosport.com/2024/12/01/4068124-82500128-2560-1440.jpg',
                'published_at' => '2024-11-05',
                'is_new' => false,
            ],
            [
                'id' => 7,
                'title' => 'Google’s Latest AI Advancements Unveiled',
                'author' => 'Chris Evans',
                'content' => 'Google announces cutting-edge updates to its AI technology, focusing on healthcare and robotics.',
                'category' => 'Technology',
                'img' => 'https://mylittlebigweb.com/wp-content/uploads/2024/01/algorithme-google-jpg.webp',
                'published_at' => '2024-10-25',
                'is_new' => false,
            ],
            [
                'id' => 8,
                'title' => 'The Importance of Cybersecurity in Modern Businesses',
                'author' => 'Rachel Adams',
                'content' => 'Understand why cybersecurity is crucial and how businesses can protect their data from increasing threats.',
                'category' => 'Security',
                'img' => 'https://www.mtu.edu/computing/cybersecurity/images/what-is-cybersecurity-banner1600.jpg',
                'published_at' => '2024-10-20',
                'is_new' => false,
            ],
            [
                'id' => 9,
                'title' => 'UN Releases Report on Renewable Energy Progress',
                'author' => 'Mark Taylor',
                'content' => 'The UN highlights progress in renewable energy adoption and the challenges that lie ahead.',
                'category' => 'Environment',
                'img' => 'https://www.shipspotting.com/photos/big/7/4/5/384547.jpg?cb=0',
                'published_at' => '2024-10-15',
                'is_new' => false,
            ],
            [
                'id' => 10,
                'title' => 'Neymar’s Stellar Performance for Al-Hilal',
                'author' => 'James Wilson',
                'content' => 'Brazilian superstar Neymar dazzles fans with a hat-trick, leading Al-Hilal to victory in the Saudi Pro League.',
                'category' => 'Football',
                'img' => 'https://assets-fr.imgfoot.com/media/cache/642x382/neymar-2324.jpg',
                'published_at' => '2024-12-03',
                'is_new' => false,
            ],
            [
                'id' => 11,
                'title' => 'SpaceX to Launch Next-Gen Starship Rocket',
                'author' => 'Anna Clark',
                'content' => 'SpaceX announces the launch of its new Starship rocket, aiming for Mars colonization in the near future.',
                'category' => 'Science',
                'img' => 'https://cdn.sortiraparis.com/images/80/88384/620293-espace-spacex-envoie-143-satellites-en-orbite-grace-a-une-seule-fusee.jpg',
                'published_at' => '2024-12-04',
                'is_new' => false,
            ],
            [
                'id' => 12,
                'title' => 'Paris Fashion Week Highlights Sustainability',
                'author' => 'Sophia Lee',
                'content' => 'The latest Paris Fashion Week emphasizes sustainable practices in high fashion, setting a trend for the industry.',
                'category' => 'Fashion',
                'img' => 'https://cache.cosmopolitan.fr/data/fichiers/59/saint-laurent-tour-eiffel-podium.jpg',
                'published_at' => '2024-12-02',
                'is_new' => false,
            ],


        ];

        return view('blog', compact('blogs'));
    }
    public function NewsData()
    {
        $blogs = [

            [
                'id' => 1,
                'title' => 'Trump Announces Presidential Campaign for 2024',
                'author' => 'Jane Doe',
                'content' => 'Donald Trump officially announces his run for the 2024 U.S. presidential elections during a rally in Florida.',
                'category' => 'Politics',
                'img' => 'https://images.seattletimes.com/wp-content/uploads/2024/10/202410201444MCT_____PHOTO____US-NEWS-PA-TRUMP-ARNOLD-PALMER-GET.jpg?d=2040x1360',
                'published_at' => '2024-12-01',
                'latest' => true,
                'poster' => false,
            ],
            [
                'id' => 2,
                'title' => 'Real Madrid Secures Victory Against Barcelona',
                'author' => 'John Smith',
                'content' => 'In an electrifying El Clásico, Real Madrid triumphed over Barcelona with a last-minute goal.',
                'category' => 'Football',
                'img' => 'https://img.20mn.fr/5OoGHC4kR-il-7Uh1-ilnCk/1444x920_editorial-use-only-no-use-with-unauthorised-audio-video-data-fixture-lists-outside-the-eu-club-league-logos-or-live-services-online-in-match-use-limited-to-45-images-15-in-extra-time-no-use-to-emulate-moving-images-no-use-in-betting-games-or-single-club-league-player-publications-services-mandatory-credit-photo-by-bagu-blanco-pressinphoto-shutterstock-14970378cl-kylian-mbappe-of-real-madrid-athletic-club-v-real-madrid-la-liga-ea-sports-match-date-19-football-san-mames-stadium-bilbao-spain-4-dec-2024-shutterstock-editorial-athletic-club-v-real-madrid-l-14970378cl-editorial-use-only-no-use-with-unauthorised-audio-video-data-fixture-lists-outside-the-eu-club-league-logos-or-live-services-online-in-match-use-limited-to-45-images-15-in-extra-time-no-use-to-emulate-moving-images-no-use-in-betting-games-or-2412051425',
                'published_at' => '2024-11-25',
                'latest' => true,
                'poster' => false,
            ],
            [
                'id' => 3,
                'title' => 'Moroccan King Mohammed VI Opens New Economic Summit',
                'author' => 'Ali Hassan',
                'content' => 'King Mohammed VI inaugurated the annual economic summit in Rabat, focusing on regional trade collaborations.',
                'category' => 'Politics',
                'img' => 'https://static01.nyt.com/images/2023/09/12/multimedia/12morocco-king-1-fmgq/12morocco-king-1-fmgq-mediumSquareAt3X.jpg',
                'published_at' => '2024-11-20',
                'latest' => true,
                'poster' => false,
            ],
            [
                'id' => 4,
                'title' => 'France vs Argentina: A Thrilling World Cup Final',
                'author' => 'Emily Brown',
                'content' => 'Relive the dramatic World Cup final where Argentina edged past France in an epic penalty shootout.',
                'category' => 'Football',
                'img' => 'https://e0.365dm.com/22/12/2048x1152/skysports-kylian-mbappe-lionel-messi_6000325.jpg?20221218151140',
                'published_at' => '2024-11-15',
                'latest' => true,
                'poster' => false,
            ],
            [
                'id' => 5,
                'title' => 'Vladimir Putin Discusses Global Energy Crisis',
                'author' => 'Sarah Johnson',
                'content' => 'Russian President Vladimir Putin addresses the global energy crisis and its implications at the Moscow Energy Forum.',
                'category' => 'Politics',
                'img' => 'https://www.ledevoir.com/documents/image/vladimir-poutine.jpg',
                'published_at' => '2024-11-10',
                'latest' => false,
                'poster' => true,
            ],
            [
                'id' => 6,
                'title' => 'Manchester United Transfers: Big Moves in 2024',
                'author' => 'Alex Carter',
                'content' => 'Manchester United signs promising talents ahead of the 2024 season, aiming to reclaim their dominance in Europe.',
                'category' => 'Football',
                'img' => 'https://i.eurosport.com/2024/12/01/4068124-82500128-2560-1440.jpg',
                'published_at' => '2024-11-05',
                'latest' => true,
                'poster' => false,
            ],
            [
                'id' => 7,
                'title' => 'Google’s Latest AI Advancements Unveiled',
                'author' => 'Chris Evans',
                'content' => 'Google announces cutting-edge updates to its AI technology, focusing on healthcare and robotics.',
                'category' => 'Technology',
                'img' => 'https://mylittlebigweb.com/wp-content/uploads/2024/01/algorithme-google-jpg.webp',
                'published_at' => '2024-10-25',
                'latest' => false,
                'poster' => false,
            ],
            [
                'id' => 8,
                'title' => 'The Importance of Cybersecurity in Modern Businesses',
                'author' => 'Rachel Adams',
                'content' => 'Understand why cybersecurity is crucial and how businesses can protect their data from increasing threats.',
                'category' => 'Security',
                'img' => 'https://www.mtu.edu/computing/cybersecurity/images/what-is-cybersecurity-banner1600.jpg',
                'published_at' => '2024-10-20',
                'latest' => false,
                'poster' => false,
            ],
            [
                'id' => 9,
                'title' => 'UN Releases Report on Renewable Energy Progress',
                'author' => 'Mark Taylor',
                'content' => 'The UN highlights progress in renewable energy adoption and the challenges that lie ahead.',
                'category' => 'Environment',
                'img' => 'https://www.shipspotting.com/photos/big/7/4/5/384547.jpg?cb=0',
                'published_at' => '2024-10-15',
                'latest' => false,
                'poster' => false,
            ],
            [
                'id' => 10,
                'title' => 'Neymar’s Stellar Performance for Al-Hilal',
                'author' => 'James Wilson',
                'content' => 'Brazilian superstar Neymar dazzles fans with a hat-trick, leading Al-Hilal to victory in the Saudi Pro League.',
                'category' => 'Football',
                'img' => 'https://assets-fr.imgfoot.com/media/cache/642x382/neymar-2324.jpg',
                'published_at' => '2024-12-03',
                'latest' => false,
                'poster' => false,
            ],
            [
                'id' => 11,
                'title' => 'SpaceX to Launch Next-Gen Starship Rocket',
                'author' => 'Anna Clark',
                'content' => 'SpaceX announces the launch of its new Starship rocket, aiming for Mars colonization in the near future.',
                'category' => 'Science',
                'img' => 'https://cdn.sortiraparis.com/images/80/88384/620293-espace-spacex-envoie-143-satellites-en-orbite-grace-a-une-seule-fusee.jpg',
                'published_at' => '2024-12-04',
                'latest' => false,
                'poster' => false,
            ],
            [
                'id' => 12,
                'title' => 'Paris Fashion Week Highlights Sustainability',
                'author' => 'Sophia Lee',
                'content' => 'The latest Paris Fashion Week emphasizes sustainable practices in high fashion, setting a trend for the industry.',
                'category' => 'Fashion',
                'img' => 'https://cache.cosmopolitan.fr/data/fichiers/59/saint-laurent-tour-eiffel-podium.jpg',
                'published_at' => '2024-12-02',
                'latest' => false,
                'poster' => false,
            ],


        ];

        return view('news', compact('blogs'));
    }

    public function store(Request $request)
    {
        $post = new Post();
        $post->title= $request->title;
        $post->author= $request->author;
        $post->content= $request->content;
        $post->category= $request->category;
        $post->img= $request->img;
        $post->poster= $request->poster;
        $post->is_new= $request->is_new;
        $post->save();
    }
    public function getstoredata(){
        return view('store');
    }
}
