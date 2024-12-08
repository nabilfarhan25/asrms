<?php

namespace Database\Seeders;

use App\Models\Slopes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SlopeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $slopeData = [
            [
                'slope_name' => 'SP_001B',
                'y_value' => 2.845,
                'p_value' => 0.971,
                'smart_category' => 'Very High',
                'lhra_score' => 24.1,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_002A',
                'y_value' => 2.144,
                'p_value' => 0.917,
                'smart_category' => 'Very High',
                'lhra_score' => 26.5,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_002B',
                'y_value' => 0.561,
                'p_value' => 0.546,
                'smart_category' => 'Medium',
                'lhra_score' => 26.1,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_003B',
                'y_value' => 2.644,
                'p_value' => 0.960,
                'smart_category' => 'Very High',
                'lhra_score' => 27.5,
                'lhra_category' => 'High Hazard'
            ],
            [
                'slope_name' => 'SP_004A',
                'y_value' => 0.711,
                'p_value' => 0.601,
                'smart_category' => 'High',
                'lhra_score' => 24.9,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_004B',
                'y_value' => 3.785,
                'p_value' => 0.988,
                'smart_category' => 'Very High',
                'lhra_score' => 26.45,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_005A',
                'y_value' => 1.829,
                'p_value' => 0.875,
                'smart_category' => 'Very High',
                'lhra_score' => 24.9,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_006A',
                'y_value' => 0.943,
                'p_value' => 0.676,
                'smart_category' => 'High',
                'lhra_score' => 24.6,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_006B',
                'y_value' => 1.187,
                'p_value' => 0.745,
                'smart_category' => 'High',
                'lhra_score' => 24.2,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_007A',
                'y_value' => 3.642,
                'p_value' => 0.988,
                'smart_category' => 'Very High',
                'lhra_score' => 26.9,
                'lhra_category' => 'High Hazard'
            ],
            [
                'slope_name' => 'SP_007B',
                'y_value' => 1.029,
                'p_value' => 0.702,
                'smart_category' => 'High',
                'lhra_score' => 28.4,
                'lhra_category' => 'High Hazard'
            ],
            [
                'slope_name' => 'SP_008A',
                'y_value' => 2.259,
                'p_value' => 0.929,
                'smart_category' => 'Very High',
                'lhra_score' => 28.8,
                'lhra_category' => 'High Hazard'
            ],
            [
                'slope_name' => 'SP_008B',
                'y_value' => 3.624,
                'p_value' => 0.988,
                'smart_category' => 'Very High',
                'lhra_score' => 26.6,
                'lhra_category' => 'High Hazard'
            ],
            [
                'slope_name' => 'SP_009B',
                'y_value' => 2.033,
                'p_value' => 0.904,
                'smart_category' => 'Very High',
                'lhra_score' => 27.4,
                'lhra_category' => 'High Hazard'
            ],
            [
                'slope_name' => 'SP_010B',
                'y_value' => 1.947,
                'p_value' => 0.892,
                'smart_category' => 'Very High',
                'lhra_score' => 26.75,
                'lhra_category' => 'High Hazard'
            ],
            [
                'slope_name' => 'SP_011A',
                'y_value' => 1.269,
                'p_value' => 0.765,
                'smart_category' => 'High',
                'lhra_score' => 26.6,
                'lhra_category' => 'High Hazard'
            ],
            [
                'slope_name' => 'SP_011B',
                'y_value' => 1.001,
                'p_value' => 0.694,
                'smart_category' => 'High',
                'lhra_score' => 26.6,
                'lhra_category' => 'High Hazard'
            ],
            [
                'slope_name' => 'SP_012A',
                'y_value' => 0.614,
                'p_value' => 0.566,
                'smart_category' => 'Medium',
                'lhra_score' => 25.5,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_012B',
                'y_value' => 1.622,
                'p_value' => 0.840,
                'smart_category' => 'Very High',
                'lhra_score' => 27.1,
                'lhra_category' => 'High Hazard'
            ],
            [
                'slope_name' => 'SP_013B',
                'y_value' => 3.593,
                'p_value' => 0.987,
                'smart_category' => 'Very High',
                'lhra_score' => 27.15,
                'lhra_category' => 'High Hazard'
            ],
            [
                'slope_name' => 'SP_SP Kaliwungu',
                'y_value' => 1.697,
                'p_value' => 0.854,
                'smart_category' => 'Very High',
                'lhra_score' => 27.4,
                'lhra_category' => 'High Hazard'
            ],
            [
                'slope_name' => 'SP_014B',
                'y_value' => 0.743,
                'p_value' => 0.612,
                'smart_category' => 'High',
                'lhra_score' => 24.2,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_015B',
                'y_value' => 0.621,
                'p_value' => 0.568,
                'smart_category' => 'Medium',
                'lhra_score' => 24.1,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_016B',
                'y_value' => 0.733,
                'p_value' => 0.608,
                'smart_category' => 'High',
                'lhra_score' => 24,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_017B',
                'y_value' => 0.720,
                'p_value' => 0.604,
                'smart_category' => 'High',
                'lhra_score' => 22.25,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_018A',
                'y_value' => 1.057,
                'p_value' => 0.710,
                'smart_category' => 'High',
                'lhra_score' => 24.5,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_018B',
                'y_value' => 1.057,
                'p_value' => 0.710,
                'smart_category' => 'High',
                'lhra_score' => 23.4,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_019A',
                'y_value' => 0.807,
                'p_value' => 0.634,
                'smart_category' => 'High',
                'lhra_score' => 24.85,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_019B',
                'y_value' => 1.422,
                'p_value' => 0.800,
                'smart_category' => 'Very High',
                'lhra_score' => 24.65,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_020A',
                'y_value' => 1.572,
                'p_value' => 0.831,
                'smart_category' => 'Very High',
                'lhra_score' => 25.1,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_020B',
                'y_value' => 1.322,
                'p_value' => 0.778,
                'smart_category' => 'High',
                'lhra_score' => 23.6,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_021A',
                'y_value' => 1.301,
                'p_value' => 0.773,
                'smart_category' => 'High',
                'lhra_score' => 24.7,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_021B',
                'y_value' => 1.568,
                'p_value' => 0.830,
                'smart_category' => 'Very High',
                'lhra_score' => 25,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_022A',
                'y_value' => 0.357,
                'p_value' => -0.227,
                'smart_category' => 'Very Low',
                'lhra_score' => 24.55,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_022B',
                'y_value' => 0.647,
                'p_value' => 0.578,
                'smart_category' => 'Medium',
                'lhra_score' => 23.3,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_023A',
                'y_value' => 0.640,
                'p_value' => 0.576,
                'smart_category' => 'Medium',
                'lhra_score' => 23.6,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_023B',
                'y_value' => 0.916,
                'p_value' => 0.668,
                'smart_category' => 'High',
                'lhra_score' => 22.3,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_024A',
                'y_value' => 0.665,
                'p_value' => 0.584,
                'smart_category' => 'Medium',
                'lhra_score' => 23.8,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_024B',
                'y_value' => 0.701,
                'p_value' => 0.597,
                'smart_category' => 'Medium',
                'lhra_score' => 22.2,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_025A',
                'y_value' => 0.684,
                'p_value' => 0.591,
                'smart_category' => 'Medium',
                'lhra_score' => 23.8,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_025B',
                'y_value' => 0.613,
                'p_value' => 0.565,
                'smart_category' => 'Medium',
                'lhra_score' => 23.3,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_026A',
                'y_value' => 0.232,
                'p_value' => -0.274,
                'smart_category' => 'Very Low',
                'lhra_score' => 24.1,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_026B',
                'y_value' => 0.370,
                'p_value' => -0.223,
                'smart_category' => 'Very Low',
                'lhra_score' => 24,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_027A',
                'y_value' => 0.619,
                'p_value' => 0.568,
                'smart_category' => 'Medium',
                'lhra_score' => 24.5,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_027B',
                'y_value' => 0.619,
                'p_value' => 0.568,
                'smart_category' => 'Medium',
                'lhra_score' => 24.1,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_028A',
                'y_value' => 0.292,
                'p_value' => -0.252,
                'smart_category' => 'Very Low',
                'lhra_score' => 23.5,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_028B',
                'y_value' => 0.054,
                'p_value' => -0.336,
                'smart_category' => 'Very Low',
                'lhra_score' => 24.1,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_029A',
                'y_value' => 0.529,
                'p_value' => 0.534,
                'smart_category' => 'Medium',
                'lhra_score' => 23.7,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_029B',
                'y_value' => 0.529,
                'p_value' => 0.534,
                'smart_category' => 'Medium',
                'lhra_score' => 23.8,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_030A',
                'y_value' => 0.680,
                'p_value' => 0.590,
                'smart_category' => 'Medium',
                'lhra_score' => 24.9,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_030B',
                'y_value' => 0.594,
                'p_value' => 0.558,
                'smart_category' => 'Medium',
                'lhra_score' => 24.3,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_031A',
                'y_value' => 0.668,
                'p_value' => 0.586,
                'smart_category' => 'Medium',
                'lhra_score' => 24.1,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_031B',
                'y_value' => 0.408,
                'p_value' => -0.208,
                'smart_category' => 'Very Low',
                'lhra_score' => 24.5,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_032A',
                'y_value' => 1.575,
                'p_value' => 0.831,
                'smart_category' => 'Very High',
                'lhra_score' => 23.5,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_032B',
                'y_value' => 0.545,
                'p_value' => 0.540,
                'smart_category' => 'Medium',
                'lhra_score' => 23.5,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_033A',
                'y_value' => 1.256,
                'p_value' => 0.762,
                'smart_category' => 'High',
                'lhra_score' => 26.6,
                'lhra_category' => 'High Hazard'
            ],
            [
                'slope_name' => 'SP_033B',
                'y_value' => 1.132,
                'p_value' => 0.730,
                'smart_category' => 'High',
                'lhra_score' => 25.3,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_034B',
                'y_value' => 0.896,
                'p_value' => 0.662,
                'smart_category' => 'High',
                'lhra_score' => 24.6,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_035A',
                'y_value' => 0.618,
                'p_value' => 0.568,
                'smart_category' => 'Medium',
                'lhra_score' => 25.1,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_035B',
                'y_value' => 1.440,
                'p_value' => 0.804,
                'smart_category' => 'Very High',
                'lhra_score' => 25.8,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_036A',
                'y_value' => 0.511,
                'p_value' => 0.527,
                'smart_category' => 'Medium',
                'lhra_score' => 23.3,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_036B',
                'y_value' => 0.336,
                'p_value' => -0.236,
                'smart_category' => 'Very Low',
                'lhra_score' => 24.5,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_037A',
                'y_value' => 0.843,
                'p_value' => 0.645,
                'smart_category' => 'High',
                'lhra_score' => 22.3,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_037B',
                'y_value' => 1.604,
                'p_value' => 0.837,
                'smart_category' => 'Very High',
                'lhra_score' => 24.2,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_038A',
                'y_value' => 1.970,
                'p_value' => 0.896,
                'smart_category' => 'Very High',
                'lhra_score' => 24.8,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_038B',
                'y_value' => 0.961,
                'p_value' => 0.682,
                'smart_category' => 'High',
                'lhra_score' => 24.1,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_039A',
                'y_value' => 1.332,
                'p_value' => 0.780,
                'smart_category' => 'High',
                'lhra_score' => 25.35,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_039B',
                'y_value' => 1.031,
                'p_value' => 0.702,
                'smart_category' => 'High',
                'lhra_score' => 22.4,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_040A',
                'y_value' => 0.461,
                'p_value' => -0.187,
                'smart_category' => 'Very Low',
                'lhra_score' => 23.8,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_040B',
                'y_value' => 0.647,
                'p_value' => 0.578,
                'smart_category' => 'Medium',
                'lhra_score' => 25.6,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_041B',
                'y_value' => 0.744,
                'p_value' => 0.612,
                'smart_category' => 'High',
                'lhra_score' => 24.35,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_042A',
                'y_value' => 0.850,
                'p_value' => 0.647,
                'smart_category' => 'High',
                'lhra_score' => 25,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_042B',
                'y_value' => 0.997,
                'p_value' => 0.693,
                'smart_category' => 'High',
                'lhra_score' => 25,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_043A',
                'y_value' => 0.399,
                'p_value' => -0.211,
                'smart_category' => 'Very Low',
                'lhra_score' => 25.2,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_043B',
                'y_value' => 0.542,
                'p_value' => 0.539,
                'smart_category' => 'Medium',
                'lhra_score' => 25.2,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_044B',
                'y_value' => 1.172,
                'p_value' => 0.741,
                'smart_category' => 'High',
                'lhra_score' => 23.3,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_045A',
                'y_value' => 0.449,
                'p_value' => -0.192,
                'smart_category' => 'Very Low',
                'lhra_score' => 23.9,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_045B',
                'y_value' => 0.518,
                'p_value' => 0.529,
                'smart_category' => 'Medium',
                'lhra_score' => 24.3,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_046B',
                'y_value' => 4.907,
                'p_value' => 1.000,
                'smart_category' => 'Very High',
                'lhra_score' => 29.9,
                'lhra_category' => 'High Hazard'
            ],
            [
                'slope_name' => 'SP_047A',
                'y_value' => 1.098,
                'p_value' => 0.721,
                'smart_category' => 'High',
                'lhra_score' => 24.35,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_048A',
                'y_value' => 0.727,
                'p_value' => 0.607,
                'smart_category' => 'High',
                'lhra_score' => 24.15,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_048B',
                'y_value' => 0.632,
                'p_value' => 0.572,
                'smart_category' => 'Medium',
                'lhra_score' => 24.55,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_049B',
                'y_value' => 0.993,
                'p_value' => 0.691,
                'smart_category' => 'High',
                'lhra_score' => 25.2,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_050A',
                'y_value' => 0.938,
                'p_value' => 0.675,
                'smart_category' => 'High',
                'lhra_score' => 26.65,
                'lhra_category' => 'High Hazard'
            ],
            [
                'slope_name' => 'SP_050B',
                'y_value' => 3.815,
                'p_value' => 0.988,
                'smart_category' => 'Very High',
                'lhra_score' => 27.1,
                'lhra_category' => 'High Hazard'
            ],
            [
                'slope_name' => 'SP_051A',
                'y_value' => 1.002,
                'p_value' => 0.694,
                'smart_category' => 'High',
                'lhra_score' => 28.8,
                'lhra_category' => 'High Hazard'
            ],
            [
                'slope_name' => 'SP_051B',
                'y_value' => 1.144,
                'p_value' => 0.734,
                'smart_category' => 'High',
                'lhra_score' => 26.9,
                'lhra_category' => 'High Hazard'
            ],
            [
                'slope_name' => 'SP_052A',
                'y_value' => 0.580,
                'p_value' => 0.553,
                'smart_category' => 'Medium',
                'lhra_score' => 25,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_053 A',
                'y_value' => 0.944,
                'p_value' => 0.677,
                'smart_category' => 'High',
                'lhra_score' => 24.4,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_053 B',
                'y_value' => 1.052,
                'p_value' => 0.835,
                'smart_category' => 'High',
                'lhra_score' => 25.2,
                'lhra_category' => 'Moderate Hazard'
            ],
            [
                'slope_name' => 'SP_054 A',
                'y_value' => 2.499,
                'p_value' => 0.950,
                'smart_category' => 'Very High',
                'lhra_score' => 27.3,
                'lhra_category' => 'High Hazard'
            ],
            [
                'slope_name' => 'SP_054 B',
                'y_value' => 1.596,
                'p_value' => 0.835,
                'smart_category' => 'Very High',
                'lhra_score' => 26.9,
                'lhra_category' => 'High Hazard'
            ]
        ];
        
        foreach ($slopeData as $data) {
            $slope = Slopes::where('slope_name', $data['slope_name'])->first();
            if ($slope) {
                $slope->y_value = $data['y_value'];
                $slope->p_value = $data['p_value'];
                $slope->smart_category = $data['smart_category'];
                $slope->lhra_score = $data['lhra_score'];
                $slope->lhra_category = $data['lhra_category'];
                $slope->save();
            }
        }

    }
}
