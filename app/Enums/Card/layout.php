<?php

namespace App\Enums\Card;

enum Layout: string
{
    case NORMAL = 'normal';
    case SPLIT = 'split';
    case FLIP = 'flip';
    case TRANSFORM = 'transform';
    case MODAL_DFC = 'modal_dfc';
    case MELD = 'meld';
    case LEVELER = 'leveler';
    case CLASS_LAYOOUT = 'class';
    case CASE = 'case';
    case SAGA = 'saga';
    case ADVENTURE = 'adventure';
    case MUTATE = 'mutate';
    case PROTOTYPE = 'prototype';
    case BATTLE = 'battle';
    case PLANAR = 'planar';
    case SCHEME = 'scheme';
    case VANGUARD = 'vanguard';
    case TOKEN = 'token';
    case DOUBLE_FACED_TOKEN = 'double_faced_token';
    case EMBLEM = 'emblem';
    case AUGMENT = 'augment';
    case HOST = 'host';
    case ART_SERIES = 'art_series';
    case REVERSIBLE_CARD = 'reversible_card';
}
