<?php

return [
    'financial_plans' => [
        'investment' => [
            'final_score' => 100,
            'factor_weights' => [
                'investment_time_horizon' => 0.1,
                'financial_goals' => 0.15,
                'financial_knowledge_and_experience' => 0.1,
                'emotional_tolerance_for_market_volatility' => 8,
                'liquidity_needs' => 0.08,
                'financial_situation' => 0.1,
                'income_stability' => 0.08,
                'debt_levels' => 0.07,
                'diversification' => 0.08,
                'market_conditions' => 0.08,
                'risk_capacity' => 0.08,
                'regulatory_and_economic_environment' => 0.08,
            ],
            'factors' => [
                'investment_time_horizon' => [
                    'report_strings_range' => [
                        'short_term' => '0-3',
                        'medium_term' => '3-10',
                        'long_term' => '>10',
                    ],
                    'unit' => 'year',
                    'weight' => 0.1
                ]
                'risk_level' => [
                    'sub_factors' => [
                        'time_horizon' => [
                            
                        ],
                        // Add more sub-factors as needed
                    ],
                ],
                
                // Add more factors as needed
            ],
        ],
        
        // Add more financial plan types as needed
    ],
];