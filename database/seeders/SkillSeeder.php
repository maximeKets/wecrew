<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Skill;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    public function fastCreate(array $skills, string $category)
    {
        foreach ($skills as $skill) {
            Skill::create([
                'name' => $skill,
                'category_id' => Category::where('name', $category)->get()->first()->id,
            ]);
        }
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $artDesign = [
            'NFT art',
            'illustration',
            '3D',
            'logo design',
            'template design',
            'app design',
            'UX',
            'web design',
        ];

        $videoAnimation = [
            '2D animation',
            '3D animation',
            'motion design',
            'character animation',
            'video editing',
        ];

        $marketing = [
            'Social media',
            'infuencer marketing',
            'management & engagement',
            'sourcing & recruitment',
            'brand strategy',
            'content strategy',
            'networking',
            'web analytics',
        ];

        $dev = [
            'NFT generators',
            'smart contracts',
            'app development',
            'web development',
            'discord development',
            'blockchain & crypto',
        ];

        $community = [
            'community management',
            'community moderation',
            'Advisory',
            'community building',
            'support team',
        ];

        $legal = [
            'Tax law',
            'securities and finance law',
            'regulatory law',
            'Intellectual property law',
            'Legal consultation',
        ];

        $this->fastCreate($artDesign, 'Art & design');

        $this->fastCreate($videoAnimation, 'video & animation');

        $this->fastCreate($marketing, 'marketing');

        $this->fastCreate($dev, 'dev');

        $this->fastCreate($community, 'community');

        $this->fastCreate($legal, 'legal');
    }
}
