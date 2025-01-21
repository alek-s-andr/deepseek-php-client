<?php

namespace DeepseekPhp\Enums;

enum Models: string
{
    case CHAT = 'deepseek-chat';
    case CODER = 'deepseek-coder';
    case R1 = 'DeepSeek-R1';
    case R1-Zero = 'DeepSeek-R1-Zero';
}
