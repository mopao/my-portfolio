<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'App\\ObjectManagers\\MailManager' => $baseDir . '/objectManagers/MailManager.php',
    'Doctrine\\Common\\Lexer\\AbstractLexer' => $vendorDir . '/doctrine/lexer/lib/Doctrine/Common/Lexer/AbstractLexer.php',
    'Egulias\\EmailValidator\\EmailLexer' => $vendorDir . '/egulias/email-validator/src/EmailLexer.php',
    'Egulias\\EmailValidator\\EmailParser' => $vendorDir . '/egulias/email-validator/src/EmailParser.php',
    'Egulias\\EmailValidator\\EmailValidator' => $vendorDir . '/egulias/email-validator/src/EmailValidator.php',
    'Egulias\\EmailValidator\\MessageIDParser' => $vendorDir . '/egulias/email-validator/src/MessageIDParser.php',
    'Egulias\\EmailValidator\\Parser' => $vendorDir . '/egulias/email-validator/src/Parser.php',
    'Egulias\\EmailValidator\\Parser\\Comment' => $vendorDir . '/egulias/email-validator/src/Parser/Comment.php',
    'Egulias\\EmailValidator\\Parser\\CommentStrategy\\CommentStrategy' => $vendorDir . '/egulias/email-validator/src/Parser/CommentStrategy/CommentStrategy.php',
    'Egulias\\EmailValidator\\Parser\\CommentStrategy\\DomainComment' => $vendorDir . '/egulias/email-validator/src/Parser/CommentStrategy/DomainComment.php',
    'Egulias\\EmailValidator\\Parser\\CommentStrategy\\LocalComment' => $vendorDir . '/egulias/email-validator/src/Parser/CommentStrategy/LocalComment.php',
    'Egulias\\EmailValidator\\Parser\\DomainLiteral' => $vendorDir . '/egulias/email-validator/src/Parser/DomainLiteral.php',
    'Egulias\\EmailValidator\\Parser\\DomainPart' => $vendorDir . '/egulias/email-validator/src/Parser/DomainPart.php',
    'Egulias\\EmailValidator\\Parser\\DoubleQuote' => $vendorDir . '/egulias/email-validator/src/Parser/DoubleQuote.php',
    'Egulias\\EmailValidator\\Parser\\FoldingWhiteSpace' => $vendorDir . '/egulias/email-validator/src/Parser/FoldingWhiteSpace.php',
    'Egulias\\EmailValidator\\Parser\\IDLeftPart' => $vendorDir . '/egulias/email-validator/src/Parser/IDLeftPart.php',
    'Egulias\\EmailValidator\\Parser\\IDRightPart' => $vendorDir . '/egulias/email-validator/src/Parser/IDRightPart.php',
    'Egulias\\EmailValidator\\Parser\\LocalPart' => $vendorDir . '/egulias/email-validator/src/Parser/LocalPart.php',
    'Egulias\\EmailValidator\\Parser\\PartParser' => $vendorDir . '/egulias/email-validator/src/Parser/PartParser.php',
    'Egulias\\EmailValidator\\Result\\InvalidEmail' => $vendorDir . '/egulias/email-validator/src/Result/InvalidEmail.php',
    'Egulias\\EmailValidator\\Result\\MultipleErrors' => $vendorDir . '/egulias/email-validator/src/Result/MultipleErrors.php',
    'Egulias\\EmailValidator\\Result\\Reason\\AtextAfterCFWS' => $vendorDir . '/egulias/email-validator/src/Result/Reason/AtextAfterCFWS.php',
    'Egulias\\EmailValidator\\Result\\Reason\\CRLFAtTheEnd' => $vendorDir . '/egulias/email-validator/src/Result/Reason/CRLFAtTheEnd.php',
    'Egulias\\EmailValidator\\Result\\Reason\\CRLFX2' => $vendorDir . '/egulias/email-validator/src/Result/Reason/CRLFX2.php',
    'Egulias\\EmailValidator\\Result\\Reason\\CRNoLF' => $vendorDir . '/egulias/email-validator/src/Result/Reason/CRNoLF.php',
    'Egulias\\EmailValidator\\Result\\Reason\\CharNotAllowed' => $vendorDir . '/egulias/email-validator/src/Result/Reason/CharNotAllowed.php',
    'Egulias\\EmailValidator\\Result\\Reason\\CommaInDomain' => $vendorDir . '/egulias/email-validator/src/Result/Reason/CommaInDomain.php',
    'Egulias\\EmailValidator\\Result\\Reason\\CommentsInIDRight' => $vendorDir . '/egulias/email-validator/src/Result/Reason/CommentsInIDRight.php',
    'Egulias\\EmailValidator\\Result\\Reason\\ConsecutiveAt' => $vendorDir . '/egulias/email-validator/src/Result/Reason/ConsecutiveAt.php',
    'Egulias\\EmailValidator\\Result\\Reason\\ConsecutiveDot' => $vendorDir . '/egulias/email-validator/src/Result/Reason/ConsecutiveDot.php',
    'Egulias\\EmailValidator\\Result\\Reason\\DetailedReason' => $vendorDir . '/egulias/email-validator/src/Result/Reason/DetailedReason.php',
    'Egulias\\EmailValidator\\Result\\Reason\\DomainAcceptsNoMail' => $vendorDir . '/egulias/email-validator/src/Result/Reason/DomainAcceptsNoMail.php',
    'Egulias\\EmailValidator\\Result\\Reason\\DomainHyphened' => $vendorDir . '/egulias/email-validator/src/Result/Reason/DomainHyphened.php',
    'Egulias\\EmailValidator\\Result\\Reason\\DomainTooLong' => $vendorDir . '/egulias/email-validator/src/Result/Reason/DomainTooLong.php',
    'Egulias\\EmailValidator\\Result\\Reason\\DotAtEnd' => $vendorDir . '/egulias/email-validator/src/Result/Reason/DotAtEnd.php',
    'Egulias\\EmailValidator\\Result\\Reason\\DotAtStart' => $vendorDir . '/egulias/email-validator/src/Result/Reason/DotAtStart.php',
    'Egulias\\EmailValidator\\Result\\Reason\\ExceptionFound' => $vendorDir . '/egulias/email-validator/src/Result/Reason/ExceptionFound.php',
    'Egulias\\EmailValidator\\Result\\Reason\\ExpectingATEXT' => $vendorDir . '/egulias/email-validator/src/Result/Reason/ExpectingATEXT.php',
    'Egulias\\EmailValidator\\Result\\Reason\\ExpectingCTEXT' => $vendorDir . '/egulias/email-validator/src/Result/Reason/ExpectingCTEXT.php',
    'Egulias\\EmailValidator\\Result\\Reason\\ExpectingDTEXT' => $vendorDir . '/egulias/email-validator/src/Result/Reason/ExpectingDTEXT.php',
    'Egulias\\EmailValidator\\Result\\Reason\\ExpectingDomainLiteralClose' => $vendorDir . '/egulias/email-validator/src/Result/Reason/ExpectingDomainLiteralClose.php',
    'Egulias\\EmailValidator\\Result\\Reason\\LabelTooLong' => $vendorDir . '/egulias/email-validator/src/Result/Reason/LabelTooLong.php',
    'Egulias\\EmailValidator\\Result\\Reason\\LocalOrReservedDomain' => $vendorDir . '/egulias/email-validator/src/Result/Reason/LocalOrReservedDomain.php',
    'Egulias\\EmailValidator\\Result\\Reason\\NoDNSRecord' => $vendorDir . '/egulias/email-validator/src/Result/Reason/NoDNSRecord.php',
    'Egulias\\EmailValidator\\Result\\Reason\\NoDomainPart' => $vendorDir . '/egulias/email-validator/src/Result/Reason/NoDomainPart.php',
    'Egulias\\EmailValidator\\Result\\Reason\\NoLocalPart' => $vendorDir . '/egulias/email-validator/src/Result/Reason/NoLocalPart.php',
    'Egulias\\EmailValidator\\Result\\Reason\\RFCWarnings' => $vendorDir . '/egulias/email-validator/src/Result/Reason/RFCWarnings.php',
    'Egulias\\EmailValidator\\Result\\Reason\\Reason' => $vendorDir . '/egulias/email-validator/src/Result/Reason/Reason.php',
    'Egulias\\EmailValidator\\Result\\Reason\\SpoofEmail' => $vendorDir . '/egulias/email-validator/src/Result/Reason/SpoofEmail.php',
    'Egulias\\EmailValidator\\Result\\Reason\\UnOpenedComment' => $vendorDir . '/egulias/email-validator/src/Result/Reason/UnOpenedComment.php',
    'Egulias\\EmailValidator\\Result\\Reason\\UnableToGetDNSRecord' => $vendorDir . '/egulias/email-validator/src/Result/Reason/UnableToGetDNSRecord.php',
    'Egulias\\EmailValidator\\Result\\Reason\\UnclosedComment' => $vendorDir . '/egulias/email-validator/src/Result/Reason/UnclosedComment.php',
    'Egulias\\EmailValidator\\Result\\Reason\\UnclosedQuotedString' => $vendorDir . '/egulias/email-validator/src/Result/Reason/UnclosedQuotedString.php',
    'Egulias\\EmailValidator\\Result\\Reason\\UnusualElements' => $vendorDir . '/egulias/email-validator/src/Result/Reason/UnusualElements.php',
    'Egulias\\EmailValidator\\Result\\Result' => $vendorDir . '/egulias/email-validator/src/Result/Result.php',
    'Egulias\\EmailValidator\\Result\\SpoofEmail' => $vendorDir . '/egulias/email-validator/src/Result/SpoofEmail.php',
    'Egulias\\EmailValidator\\Result\\ValidEmail' => $vendorDir . '/egulias/email-validator/src/Result/ValidEmail.php',
    'Egulias\\EmailValidator\\Validation\\DNSCheckValidation' => $vendorDir . '/egulias/email-validator/src/Validation/DNSCheckValidation.php',
    'Egulias\\EmailValidator\\Validation\\EmailValidation' => $vendorDir . '/egulias/email-validator/src/Validation/EmailValidation.php',
    'Egulias\\EmailValidator\\Validation\\Exception\\EmptyValidationList' => $vendorDir . '/egulias/email-validator/src/Validation/Exception/EmptyValidationList.php',
    'Egulias\\EmailValidator\\Validation\\Extra\\SpoofCheckValidation' => $vendorDir . '/egulias/email-validator/src/Validation/Extra/SpoofCheckValidation.php',
    'Egulias\\EmailValidator\\Validation\\MessageIDValidation' => $vendorDir . '/egulias/email-validator/src/Validation/MessageIDValidation.php',
    'Egulias\\EmailValidator\\Validation\\MultipleValidationWithAnd' => $vendorDir . '/egulias/email-validator/src/Validation/MultipleValidationWithAnd.php',
    'Egulias\\EmailValidator\\Validation\\NoRFCWarningsValidation' => $vendorDir . '/egulias/email-validator/src/Validation/NoRFCWarningsValidation.php',
    'Egulias\\EmailValidator\\Validation\\RFCValidation' => $vendorDir . '/egulias/email-validator/src/Validation/RFCValidation.php',
    'Egulias\\EmailValidator\\Warning\\AddressLiteral' => $vendorDir . '/egulias/email-validator/src/Warning/AddressLiteral.php',
    'Egulias\\EmailValidator\\Warning\\CFWSNearAt' => $vendorDir . '/egulias/email-validator/src/Warning/CFWSNearAt.php',
    'Egulias\\EmailValidator\\Warning\\CFWSWithFWS' => $vendorDir . '/egulias/email-validator/src/Warning/CFWSWithFWS.php',
    'Egulias\\EmailValidator\\Warning\\Comment' => $vendorDir . '/egulias/email-validator/src/Warning/Comment.php',
    'Egulias\\EmailValidator\\Warning\\DeprecatedComment' => $vendorDir . '/egulias/email-validator/src/Warning/DeprecatedComment.php',
    'Egulias\\EmailValidator\\Warning\\DomainLiteral' => $vendorDir . '/egulias/email-validator/src/Warning/DomainLiteral.php',
    'Egulias\\EmailValidator\\Warning\\EmailTooLong' => $vendorDir . '/egulias/email-validator/src/Warning/EmailTooLong.php',
    'Egulias\\EmailValidator\\Warning\\IPV6BadChar' => $vendorDir . '/egulias/email-validator/src/Warning/IPV6BadChar.php',
    'Egulias\\EmailValidator\\Warning\\IPV6ColonEnd' => $vendorDir . '/egulias/email-validator/src/Warning/IPV6ColonEnd.php',
    'Egulias\\EmailValidator\\Warning\\IPV6ColonStart' => $vendorDir . '/egulias/email-validator/src/Warning/IPV6ColonStart.php',
    'Egulias\\EmailValidator\\Warning\\IPV6Deprecated' => $vendorDir . '/egulias/email-validator/src/Warning/IPV6Deprecated.php',
    'Egulias\\EmailValidator\\Warning\\IPV6DoubleColon' => $vendorDir . '/egulias/email-validator/src/Warning/IPV6DoubleColon.php',
    'Egulias\\EmailValidator\\Warning\\IPV6GroupCount' => $vendorDir . '/egulias/email-validator/src/Warning/IPV6GroupCount.php',
    'Egulias\\EmailValidator\\Warning\\IPV6MaxGroups' => $vendorDir . '/egulias/email-validator/src/Warning/IPV6MaxGroups.php',
    'Egulias\\EmailValidator\\Warning\\LocalTooLong' => $vendorDir . '/egulias/email-validator/src/Warning/LocalTooLong.php',
    'Egulias\\EmailValidator\\Warning\\NoDNSMXRecord' => $vendorDir . '/egulias/email-validator/src/Warning/NoDNSMXRecord.php',
    'Egulias\\EmailValidator\\Warning\\ObsoleteDTEXT' => $vendorDir . '/egulias/email-validator/src/Warning/ObsoleteDTEXT.php',
    'Egulias\\EmailValidator\\Warning\\QuotedPart' => $vendorDir . '/egulias/email-validator/src/Warning/QuotedPart.php',
    'Egulias\\EmailValidator\\Warning\\QuotedString' => $vendorDir . '/egulias/email-validator/src/Warning/QuotedString.php',
    'Egulias\\EmailValidator\\Warning\\TLD' => $vendorDir . '/egulias/email-validator/src/Warning/TLD.php',
    'Egulias\\EmailValidator\\Warning\\Warning' => $vendorDir . '/egulias/email-validator/src/Warning/Warning.php',
    'Normalizer' => $vendorDir . '/symfony/polyfill-intl-normalizer/Resources/stubs/Normalizer.php',
    'Symfony\\Polyfill\\Iconv\\Iconv' => $vendorDir . '/symfony/polyfill-iconv/Iconv.php',
    'Symfony\\Polyfill\\Intl\\Idn\\Idn' => $vendorDir . '/symfony/polyfill-intl-idn/Idn.php',
    'Symfony\\Polyfill\\Intl\\Idn\\Info' => $vendorDir . '/symfony/polyfill-intl-idn/Info.php',
    'Symfony\\Polyfill\\Intl\\Idn\\Resources\\unidata\\DisallowedRanges' => $vendorDir . '/symfony/polyfill-intl-idn/Resources/unidata/DisallowedRanges.php',
    'Symfony\\Polyfill\\Intl\\Idn\\Resources\\unidata\\Regex' => $vendorDir . '/symfony/polyfill-intl-idn/Resources/unidata/Regex.php',
    'Symfony\\Polyfill\\Intl\\Normalizer\\Normalizer' => $vendorDir . '/symfony/polyfill-intl-normalizer/Normalizer.php',
    'Symfony\\Polyfill\\Mbstring\\Mbstring' => $vendorDir . '/symfony/polyfill-mbstring/Mbstring.php',
    'Symfony\\Polyfill\\Php72\\Php72' => $vendorDir . '/symfony/polyfill-php72/Php72.php',
);
