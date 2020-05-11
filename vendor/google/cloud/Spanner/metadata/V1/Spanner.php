<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/v1/spanner.proto

namespace GPBMetadata\Google\Spanner\V1;

class Spanner
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        \GPBMetadata\Google\Spanner\V1\Keys::initOnce();
        \GPBMetadata\Google\Spanner\V1\Mutation::initOnce();
        \GPBMetadata\Google\Spanner\V1\ResultSet::initOnce();
        \GPBMetadata\Google\Spanner\V1\Transaction::initOnce();
        \GPBMetadata\Google\Spanner\V1\Type::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ac83c0a1f676f6f676c652f7370616e6e65722f76312f7370616e6e6572" .
            "2e70726f746f1211676f6f676c652e7370616e6e65722e76311a17676f6f" .
            "676c652f6170692f636c69656e742e70726f746f1a1f676f6f676c652f61" .
            "70692f6669656c645f6265686176696f722e70726f746f1a19676f6f676c" .
            "652f6170692f7265736f757263652e70726f746f1a1b676f6f676c652f70" .
            "726f746f6275662f656d7074792e70726f746f1a1c676f6f676c652f7072" .
            "6f746f6275662f7374727563742e70726f746f1a1f676f6f676c652f7072" .
            "6f746f6275662f74696d657374616d702e70726f746f1a17676f6f676c65" .
            "2f7270632f7374617475732e70726f746f1a1c676f6f676c652f7370616e" .
            "6e65722f76312f6b6579732e70726f746f1a20676f6f676c652f7370616e" .
            "6e65722f76312f6d75746174696f6e2e70726f746f1a22676f6f676c652f" .
            "7370616e6e65722f76312f726573756c745f7365742e70726f746f1a2367" .
            "6f6f676c652f7370616e6e65722f76312f7472616e73616374696f6e2e70" .
            "726f746f1a1c676f6f676c652f7370616e6e65722f76312f747970652e70" .
            "726f746f227e0a1443726561746553657373696f6e526571756573741239" .
            "0a0864617461626173651801200128094227e04102fa41210a1f7370616e" .
            "6e65722e676f6f676c65617069732e636f6d2f4461746162617365122b0a" .
            "0773657373696f6e18022001280b321a2e676f6f676c652e7370616e6e65" .
            "722e76312e53657373696f6e22a9010a1a42617463684372656174655365" .
            "7373696f6e735265717565737412390a0864617461626173651801200128" .
            "094227e04102fa41210a1f7370616e6e65722e676f6f676c65617069732e" .
            "636f6d2f446174616261736512340a1073657373696f6e5f74656d706c61" .
            "746518022001280b321a2e676f6f676c652e7370616e6e65722e76312e53" .
            "657373696f6e121a0a0d73657373696f6e5f636f756e7418032001280542" .
            "03e04102224a0a1b426174636843726561746553657373696f6e73526573" .
            "706f6e7365122b0a0773657373696f6e18012003280b321a2e676f6f676c" .
            "652e7370616e6e65722e76312e53657373696f6e22e4020a075365737369" .
            "6f6e120c0a046e616d6518012001280912360a066c6162656c7318022003" .
            "280b32262e676f6f676c652e7370616e6e65722e76312e53657373696f6e" .
            "2e4c6162656c73456e747279122f0a0b6372656174655f74696d65180320" .
            "01280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d" .
            "70123d0a19617070726f78696d6174655f6c6173745f7573655f74696d65" .
            "18042001280b321a2e676f6f676c652e70726f746f6275662e54696d6573" .
            "74616d701a2d0a0b4c6162656c73456e747279120b0a036b657918012001" .
            "2809120d0a0576616c75651802200128093a0238013a74ea41710a1e7370" .
            "616e6e65722e676f6f676c65617069732e636f6d2f53657373696f6e124f" .
            "70726f6a656374732f7b70726f6a6563747d2f696e7374616e6365732f7b" .
            "696e7374616e63657d2f6461746162617365732f7b64617461626173657d" .
            "2f73657373696f6e732f7b73657373696f6e7d22490a1147657453657373" .
            "696f6e5265717565737412340a046e616d651801200128094226e04102fa" .
            "41200a1e7370616e6e65722e676f6f676c65617069732e636f6d2f536573" .
            "73696f6e2287010a134c69737453657373696f6e73526571756573741239" .
            "0a0864617461626173651801200128094227e04102fa41210a1f7370616e" .
            "6e65722e676f6f676c65617069732e636f6d2f446174616261736512110a" .
            "09706167655f73697a6518022001280512120a0a706167655f746f6b656e" .
            "180320012809120e0a0666696c746572180420012809225d0a144c697374" .
            "53657373696f6e73526573706f6e7365122c0a0873657373696f6e731801" .
            "2003280b321a2e676f6f676c652e7370616e6e65722e76312e5365737369" .
            "6f6e12170a0f6e6578745f706167655f746f6b656e180220012809224c0a" .
            "1444656c65746553657373696f6e5265717565737412340a046e616d6518" .
            "01200128094226e04102fa41200a1e7370616e6e65722e676f6f676c6561" .
            "7069732e636f6d2f53657373696f6e2282050a114578656375746553716c" .
            "5265717565737412370a0773657373696f6e1801200128094226e04102fa" .
            "41200a1e7370616e6e65722e676f6f676c65617069732e636f6d2f536573" .
            "73696f6e123b0a0b7472616e73616374696f6e18022001280b32262e676f" .
            "6f676c652e7370616e6e65722e76312e5472616e73616374696f6e53656c" .
            "6563746f7212100a0373716c1803200128094203e0410212270a06706172" .
            "616d7318042001280b32172e676f6f676c652e70726f746f6275662e5374" .
            "7275637412490a0b706172616d5f747970657318052003280b32342e676f" .
            "6f676c652e7370616e6e65722e76312e4578656375746553716c52657175" .
            "6573742e506172616d5479706573456e74727912140a0c726573756d655f" .
            "746f6b656e18062001280c12420a0a71756572795f6d6f64651807200128" .
            "0e322e2e676f6f676c652e7370616e6e65722e76312e4578656375746553" .
            "716c526571756573742e51756572794d6f646512170a0f70617274697469" .
            "6f6e5f746f6b656e18082001280c120d0a057365716e6f18092001280312" .
            "480a0d71756572795f6f7074696f6e73180a2001280b32312e676f6f676c" .
            "652e7370616e6e65722e76312e4578656375746553716c52657175657374" .
            "2e51756572794f7074696f6e731a290a0c51756572794f7074696f6e7312" .
            "190a116f7074696d697a65725f76657273696f6e1801200128091a4a0a0f" .
            "506172616d5479706573456e747279120b0a036b65791801200128091226" .
            "0a0576616c756518022001280b32172e676f6f676c652e7370616e6e6572" .
            "2e76312e547970653a023801222e0a0951756572794d6f6465120a0a064e" .
            "4f524d414c100012080a04504c414e1001120b0a0750524f46494c451002" .
            "22df030a16457865637574654261746368446d6c5265717565737412370a" .
            "0773657373696f6e1801200128094226e04102fa41200a1e7370616e6e65" .
            "722e676f6f676c65617069732e636f6d2f53657373696f6e12400a0b7472" .
            "616e73616374696f6e18022001280b32262e676f6f676c652e7370616e6e" .
            "65722e76312e5472616e73616374696f6e53656c6563746f724203e04102" .
            "124c0a0a73746174656d656e747318032003280b32332e676f6f676c652e" .
            "7370616e6e65722e76312e457865637574654261746368446d6c52657175" .
            "6573742e53746174656d656e744203e0410212120a057365716e6f180420" .
            "0128034203e041021ae7010a0953746174656d656e74120b0a0373716c18" .
            "012001280912270a06706172616d7318022001280b32172e676f6f676c65" .
            "2e70726f746f6275662e53747275637412580a0b706172616d5f74797065" .
            "7318032003280b32432e676f6f676c652e7370616e6e65722e76312e4578" .
            "65637574654261746368446d6c526571756573742e53746174656d656e74" .
            "2e506172616d5479706573456e7472791a4a0a0f506172616d5479706573" .
            "456e747279120b0a036b657918012001280912260a0576616c7565180220" .
            "01280b32172e676f6f676c652e7370616e6e65722e76312e547970653a02" .
            "380122700a17457865637574654261746368446d6c526573706f6e736512" .
            "310a0b726573756c745f7365747318012003280b321c2e676f6f676c652e" .
            "7370616e6e65722e76312e526573756c7453657412220a06737461747573" .
            "18022001280b32122e676f6f676c652e7270632e53746174757322480a10" .
            "506172746974696f6e4f7074696f6e73121c0a14706172746974696f6e5f" .
            "73697a655f627974657318012001280312160a0e6d61785f706172746974" .
            "696f6e7318022001280322a3030a15506172746974696f6e517565727952" .
            "65717565737412370a0773657373696f6e1801200128094226e04102fa41" .
            "200a1e7370616e6e65722e676f6f676c65617069732e636f6d2f53657373" .
            "696f6e123b0a0b7472616e73616374696f6e18022001280b32262e676f6f" .
            "676c652e7370616e6e65722e76312e5472616e73616374696f6e53656c65" .
            "63746f7212100a0373716c1803200128094203e0410212270a0670617261" .
            "6d7318042001280b32172e676f6f676c652e70726f746f6275662e537472" .
            "756374124d0a0b706172616d5f747970657318052003280b32382e676f6f" .
            "676c652e7370616e6e65722e76312e506172746974696f6e517565727952" .
            "6571756573742e506172616d5479706573456e747279123e0a1170617274" .
            "6974696f6e5f6f7074696f6e7318062001280b32232e676f6f676c652e73" .
            "70616e6e65722e76312e506172746974696f6e4f7074696f6e731a4a0a0f" .
            "506172616d5479706573456e747279120b0a036b65791801200128091226" .
            "0a0576616c756518022001280b32172e676f6f676c652e7370616e6e6572" .
            "2e76312e547970653a02380122b1020a14506172746974696f6e52656164" .
            "5265717565737412370a0773657373696f6e1801200128094226e04102fa" .
            "41200a1e7370616e6e65722e676f6f676c65617069732e636f6d2f536573" .
            "73696f6e123b0a0b7472616e73616374696f6e18022001280b32262e676f" .
            "6f676c652e7370616e6e65722e76312e5472616e73616374696f6e53656c" .
            "6563746f7212120a057461626c651803200128094203e04102120d0a0569" .
            "6e646578180420012809120f0a07636f6c756d6e73180520032809122f0a" .
            "076b65795f73657418062001280b32192e676f6f676c652e7370616e6e65" .
            "722e76312e4b65795365744203e04102123e0a11706172746974696f6e5f" .
            "6f7074696f6e7318092001280b32232e676f6f676c652e7370616e6e6572" .
            "2e76312e506172746974696f6e4f7074696f6e7322240a09506172746974" .
            "696f6e12170a0f706172746974696f6e5f746f6b656e18012001280c227a" .
            "0a11506172746974696f6e526573706f6e736512300a0a70617274697469" .
            "6f6e7318012003280b321c2e676f6f676c652e7370616e6e65722e76312e" .
            "506172746974696f6e12330a0b7472616e73616374696f6e18022001280b" .
            "321e2e676f6f676c652e7370616e6e65722e76312e5472616e7361637469" .
            "6f6e22ab020a0b526561645265717565737412370a0773657373696f6e18" .
            "01200128094226e04102fa41200a1e7370616e6e65722e676f6f676c6561" .
            "7069732e636f6d2f53657373696f6e123b0a0b7472616e73616374696f6e" .
            "18022001280b32262e676f6f676c652e7370616e6e65722e76312e547261" .
            "6e73616374696f6e53656c6563746f7212120a057461626c651803200128" .
            "094203e04102120d0a05696e64657818042001280912140a07636f6c756d" .
            "6e731805200328094203e04102122f0a076b65795f73657418062001280b" .
            "32192e676f6f676c652e7370616e6e65722e76312e4b65795365744203e0" .
            "4102120d0a056c696d697418082001280312140a0c726573756d655f746f" .
            "6b656e18092001280c12170a0f706172746974696f6e5f746f6b656e180a" .
            "2001280c228f010a17426567696e5472616e73616374696f6e5265717565" .
            "737412370a0773657373696f6e1801200128094226e04102fa41200a1e73" .
            "70616e6e65722e676f6f676c65617069732e636f6d2f53657373696f6e12" .
            "3b0a076f7074696f6e7318022001280b32252e676f6f676c652e7370616e" .
            "6e65722e76312e5472616e73616374696f6e4f7074696f6e734203e04102" .
            "22ea010a0d436f6d6d69745265717565737412370a0773657373696f6e18" .
            "01200128094226e04102fa41200a1e7370616e6e65722e676f6f676c6561" .
            "7069732e636f6d2f53657373696f6e12180a0e7472616e73616374696f6e" .
            "5f696418022001280c480012470a1673696e676c655f7573655f7472616e" .
            "73616374696f6e18032001280b32252e676f6f676c652e7370616e6e6572" .
            "2e76312e5472616e73616374696f6e4f7074696f6e734800122e0a096d75" .
            "746174696f6e7318042003280b321b2e676f6f676c652e7370616e6e6572" .
            "2e76312e4d75746174696f6e420d0a0b7472616e73616374696f6e22460a" .
            "0e436f6d6d6974526573706f6e736512340a10636f6d6d69745f74696d65" .
            "7374616d7018012001280b321a2e676f6f676c652e70726f746f6275662e" .
            "54696d657374616d7022670a0f526f6c6c6261636b526571756573741237" .
            "0a0773657373696f6e1801200128094226e04102fa41200a1e7370616e6e" .
            "65722e676f6f676c65617069732e636f6d2f53657373696f6e121b0a0e74" .
            "72616e73616374696f6e5f696418022001280c4203e0410232c0160a0753" .
            "70616e6e657212a6010a0d43726561746553657373696f6e12272e676f6f" .
            "676c652e7370616e6e65722e76312e43726561746553657373696f6e5265" .
            "71756573741a1a2e676f6f676c652e7370616e6e65722e76312e53657373" .
            "696f6e225082d3e493023f223a2f76312f7b64617461626173653d70726f" .
            "6a656374732f2a2f696e7374616e6365732f2a2f6461746162617365732f" .
            "2a7d2f73657373696f6e733a012ada4108646174616261736512e0010a13" .
            "426174636843726561746553657373696f6e73122d2e676f6f676c652e73" .
            "70616e6e65722e76312e426174636843726561746553657373696f6e7352" .
            "6571756573741a2e2e676f6f676c652e7370616e6e65722e76312e426174" .
            "636843726561746553657373696f6e73526573706f6e7365226a82d3e493" .
            "024b22462f76312f7b64617461626173653d70726f6a656374732f2a2f69" .
            "6e7374616e6365732f2a2f6461746162617365732f2a7d2f73657373696f" .
            "6e733a62617463684372656174653a012ada411664617461626173652c73" .
            "657373696f6e5f636f756e741297010a0a47657453657373696f6e12242e" .
            "676f6f676c652e7370616e6e65722e76312e47657453657373696f6e5265" .
            "71756573741a1a2e676f6f676c652e7370616e6e65722e76312e53657373" .
            "696f6e224782d3e493023a12382f76312f7b6e616d653d70726f6a656374" .
            "732f2a2f696e7374616e6365732f2a2f6461746162617365732f2a2f7365" .
            "7373696f6e732f2a7dda41046e616d6512ae010a0c4c6973745365737369" .
            "6f6e7312262e676f6f676c652e7370616e6e65722e76312e4c6973745365" .
            "7373696f6e73526571756573741a272e676f6f676c652e7370616e6e6572" .
            "2e76312e4c69737453657373696f6e73526573706f6e7365224d82d3e493" .
            "023c123a2f76312f7b64617461626173653d70726f6a656374732f2a2f69" .
            "6e7374616e6365732f2a2f6461746162617365732f2a7d2f73657373696f" .
            "6e73da410864617461626173651299010a0d44656c65746553657373696f" .
            "6e12272e676f6f676c652e7370616e6e65722e76312e44656c6574655365" .
            "7373696f6e526571756573741a162e676f6f676c652e70726f746f627566" .
            "2e456d707479224782d3e493023a2a382f76312f7b6e616d653d70726f6a" .
            "656374732f2a2f696e7374616e6365732f2a2f6461746162617365732f2a" .
            "2f73657373696f6e732f2a7dda41046e616d6512a3010a0a457865637574" .
            "6553716c12242e676f6f676c652e7370616e6e65722e76312e4578656375" .
            "746553716c526571756573741a1c2e676f6f676c652e7370616e6e65722e" .
            "76312e526573756c74536574225182d3e493024b22462f76312f7b736573" .
            "73696f6e3d70726f6a656374732f2a2f696e7374616e6365732f2a2f6461" .
            "746162617365732f2a2f73657373696f6e732f2a7d3a6578656375746553" .
            "716c3a012a12be010a134578656375746553747265616d696e6753716c12" .
            "242e676f6f676c652e7370616e6e65722e76312e4578656375746553716c" .
            "526571756573741a232e676f6f676c652e7370616e6e65722e76312e5061" .
            "727469616c526573756c74536574225a82d3e4930254224f2f76312f7b73" .
            "657373696f6e3d70726f6a656374732f2a2f696e7374616e6365732f2a2f" .
            "6461746162617365732f2a2f73657373696f6e732f2a7d3a657865637574" .
            "6553747265616d696e6753716c3a012a300112c0010a0f45786563757465" .
            "4261746368446d6c12292e676f6f676c652e7370616e6e65722e76312e45" .
            "7865637574654261746368446d6c526571756573741a2a2e676f6f676c65" .
            "2e7370616e6e65722e76312e457865637574654261746368446d6c526573" .
            "706f6e7365225682d3e4930250224b2f76312f7b73657373696f6e3d7072" .
            "6f6a656374732f2a2f696e7374616e6365732f2a2f646174616261736573" .
            "2f2a2f73657373696f6e732f2a7d3a657865637574654261746368446d6c" .
            "3a012a1291010a0452656164121e2e676f6f676c652e7370616e6e65722e" .
            "76312e52656164526571756573741a1c2e676f6f676c652e7370616e6e65" .
            "722e76312e526573756c74536574224b82d3e493024522402f76312f7b73" .
            "657373696f6e3d70726f6a656374732f2a2f696e7374616e6365732f2a2f" .
            "6461746162617365732f2a2f73657373696f6e732f2a7d3a726561643a01" .
            "2a12ac010a0d53747265616d696e6752656164121e2e676f6f676c652e73" .
            "70616e6e65722e76312e52656164526571756573741a232e676f6f676c65" .
            "2e7370616e6e65722e76312e5061727469616c526573756c745365742254" .
            "82d3e493024e22492f76312f7b73657373696f6e3d70726f6a656374732f" .
            "2a2f696e7374616e6365732f2a2f6461746162617365732f2a2f73657373" .
            "696f6e732f2a7d3a73747265616d696e67526561643a012a300112c9010a" .
            "10426567696e5472616e73616374696f6e122a2e676f6f676c652e737061" .
            "6e6e65722e76312e426567696e5472616e73616374696f6e526571756573" .
            "741a1e2e676f6f676c652e7370616e6e65722e76312e5472616e73616374" .
            "696f6e226982d3e4930251224c2f76312f7b73657373696f6e3d70726f6a" .
            "656374732f2a2f696e7374616e6365732f2a2f6461746162617365732f2a" .
            "2f73657373696f6e732f2a7d3a626567696e5472616e73616374696f6e3a" .
            "012ada410f73657373696f6e2c6f7074696f6e7312eb010a06436f6d6d69" .
            "7412202e676f6f676c652e7370616e6e65722e76312e436f6d6d69745265" .
            "71756573741a212e676f6f676c652e7370616e6e65722e76312e436f6d6d" .
            "6974526573706f6e7365229b0182d3e493024722422f76312f7b73657373" .
            "696f6e3d70726f6a656374732f2a2f696e7374616e6365732f2a2f646174" .
            "6162617365732f2a2f73657373696f6e732f2a7d3a636f6d6d69743a012a" .
            "da412073657373696f6e2c7472616e73616374696f6e5f69642c6d757461" .
            "74696f6e73da412873657373696f6e2c73696e676c655f7573655f747261" .
            "6e73616374696f6e2c6d75746174696f6e7312b0010a08526f6c6c626163" .
            "6b12222e676f6f676c652e7370616e6e65722e76312e526f6c6c6261636b" .
            "526571756573741a162e676f6f676c652e70726f746f6275662e456d7074" .
            "79226882d3e493024922442f76312f7b73657373696f6e3d70726f6a6563" .
            "74732f2a2f696e7374616e6365732f2a2f6461746162617365732f2a2f73" .
            "657373696f6e732f2a7d3a726f6c6c6261636b3a012ada41167365737369" .
            "6f6e2c7472616e73616374696f6e5f696412b7010a0e506172746974696f" .
            "6e517565727912282e676f6f676c652e7370616e6e65722e76312e506172" .
            "746974696f6e5175657279526571756573741a242e676f6f676c652e7370" .
            "616e6e65722e76312e506172746974696f6e526573706f6e7365225582d3" .
            "e493024f224a2f76312f7b73657373696f6e3d70726f6a656374732f2a2f" .
            "696e7374616e6365732f2a2f6461746162617365732f2a2f73657373696f" .
            "6e732f2a7d3a706172746974696f6e51756572793a012a12b4010a0d5061" .
            "72746974696f6e5265616412272e676f6f676c652e7370616e6e65722e76" .
            "312e506172746974696f6e52656164526571756573741a242e676f6f676c" .
            "652e7370616e6e65722e76312e506172746974696f6e526573706f6e7365" .
            "225482d3e493024e22492f76312f7b73657373696f6e3d70726f6a656374" .
            "732f2a2f696e7374616e6365732f2a2f6461746162617365732f2a2f7365" .
            "7373696f6e732f2a7d3a706172746974696f6e526561643a012a1a77ca41" .
            "167370616e6e65722e676f6f676c65617069732e636f6dd2415b68747470" .
            "733a2f2f7777772e676f6f676c65617069732e636f6d2f617574682f636c" .
            "6f75642d706c6174666f726d2c68747470733a2f2f7777772e676f6f676c" .
            "65617069732e636f6d2f617574682f7370616e6e65722e6461746142f701" .
            "0a15636f6d2e676f6f676c652e7370616e6e65722e7631420c5370616e6e" .
            "657250726f746f50015a38676f6f676c652e676f6c616e672e6f72672f67" .
            "656e70726f746f2f676f6f676c65617069732f7370616e6e65722f76313b" .
            "7370616e6e6572aa0217476f6f676c652e436c6f75642e5370616e6e6572" .
            "2e5631ca0217476f6f676c655c436c6f75645c5370616e6e65725c5631ea" .
            "415f0a1f7370616e6e65722e676f6f676c65617069732e636f6d2f446174" .
            "6162617365123c70726f6a656374732f7b70726f6a6563747d2f696e7374" .
            "616e6365732f7b696e7374616e63657d2f6461746162617365732f7b6461" .
            "7461626173657d620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

