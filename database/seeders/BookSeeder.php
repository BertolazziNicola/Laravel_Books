<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            [
                'title' => 'Harry Potter and the Philosopher\'s Stone',
                'description' => "Harry Potter, an orphaned boy, discovers on his 11th birthday that he's a wizard. Invited to Hogwarts School of Witchcraft and Wizardry, he embarks on a magical journey, meeting friends like Ron Weasley and Hermione Granger. As he learns about the wizarding world, Harry uncovers a sinister mystery surrounding the Philosopher's Stone, a powerful artifact with the ability to grant immortality. The story weaves together friendship, bravery, and the battle between good and evil, with Harry uncovering his connection to the dark wizard, Voldemort.",
                'pages' => 223,
                'author_id' => 1,
                'category_id' => 1,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'title' => 'A Game of Thrones',
                'description' => "In the Seven Kingdoms of Westeros, noble families vie for control of the Iron Throne. The Stark family of the North faces brutal politics, while the Lannisters are embroiled in power struggles. At the Wall, Jon Snow, a Stark bastard, prepares to face threats beyond the kingdom. Meanwhile, Daenerys Targaryen, the exiled daughter of the last King, plots her return to Westeros. As winter approaches, ancient forces stir, and the fight for the throne takes a deadly turn, setting the stage for treachery, war, and betrayal.",
                'pages' => 694,
                'author_id' => 2,
                'category_id' => 1,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'title' => 'Pride and Prejudice',
                'description' => "In Regency-era England, Elizabeth Bennet is a witty and independent young woman who is determined to marry for love, not status. Her life changes when she meets the enigmatic and wealthy Mr. Darcy. At first, Elizabeth finds Darcy arrogant, but over time, their relationship evolves as both characters confront their own prejudices and misconceptions. Themes of love, class, and societal expectations are explored in this timeless romantic novel, filled with sharp dialogue, personal growth, and the intricacies of social interaction.",
                'pages' => 432,
                'author_id' => 3,
                'category_id' => 3,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'title' => 'Harry Potter and the Chamber of Secrets',
                'description' => "In Harry Potter’s second year at Hogwarts, dark events unfold as a mysterious chamber hidden within the school is opened. Students are being petrified by an unknown creature, and whispers of a dark legend fill the air. Harry, Ron, and Hermione investigate, uncovering a long-buried secret about Tom Riddle, a student from the past. As Harry faces the danger posed by the chamber, he uncovers more about his own past and his connection to Voldemort, setting the stage for future battles between good and evil.",
                'pages' => 251,
                'author_id' => 1,
                'category_id' => 1,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'title' => 'Harry Potter and the Prisoner of Azkaban.',
                'description' => "Harry returns to Hogwarts for his third year, only to discover that Sirius Black, a dangerous prisoner, has escaped from Azkaban and is believed to be after him. As Harry uncovers the truth about Sirius, he learns that not everything is as it seems. With the help of his friends, Harry embarks on a journey that reveals deep secrets about his own family and a betrayal that changed the course of his life. Themes of loyalty, justice, and redemption are explored in this thrilling installment of the series.",
                'pages' => 317,
                'author_id' => 1,
                'category_id' => 1,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'title' => 'A Clash of Kings',
                'description' => "In the aftermath of the death of King Robert Baratheon, Westeros is plunged into civil war as several factions vie for the Iron Throne. Robb Stark leads a rebellion in the North, Stannis Baratheon claims his brother’s throne, and Renly Baratheon raises his own army. Meanwhile, Tyrion Lannister serves as Hand of the King, trying to hold the kingdom together while facing challenges from both allies and enemies. As power struggles intensify, an ancient and terrifying threat from beyond the Wall grows stronger, setting the stage for even greater conflicts.",
                'pages' => 768,
                'author_id' => 2,
                'category_id' => 1,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'title' => 'A Storm of Swords',
                'description' => "The battle for the Iron Throne intensifies as alliances shift and betrayals unfold. Robb Stark’s rebellion faces devastating setbacks, and Stannis Baratheon continues his quest for the throne. In the capital, Tyrion Lannister navigates the treacherous waters of court politics while his sister, Cersei, seeks power at any cost. The brutal reality of war and the harshness of Westeros are revealed as characters face impossible choices. In the North, the Night’s Watch prepares for the looming invasion of the White Walkers, signaling a deeper and more dangerous threat to all of humanity.",
                'pages' => 973,
                'author_id' => 2,
                'category_id' => 1,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'title' => 'Sense and Sensibility',
                'description' => "The Dashwood sisters, Elinor and Marianne, are thrust into financial and emotional turmoil after their father’s death. Elinor, the practical one, strives to keep her family stable, while Marianne, the passionate one, seeks romantic fulfillment without regard for the consequences. Their contrasting personalities lead to different romantic entanglements, with Elinor struggling to maintain composure while dealing with her own love interests, and Marianne experiencing the highs and lows of love. Through loss, hardship, and self-discovery, the novel explores the balance between reason and emotion in love and life.",
                'pages' => 409,
                'author_id' => 3,
                'category_id' => 3,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        ]);
    }
}
