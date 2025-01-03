<script>
    const grossWeightInput = $('#gross_weight');
    const netWeightInput = $('#net_weight');
    const lossInput = $('#loss');
    const unitPriceInput = $('#unit_price');
    const priceKiloInput = $('#price_kilo');
    const correctionFactorInput = $('#correction_factor');
    const revenueInput = $('#revenue');

    $(document).ready(function() {
        correctionFactorInput.on('change', function () {
            calcNetWeightByCorrectionFactor();
        });

        revenueInput.on('change', function() {
            calcNetWeightByRevenue();
        });

        $('.ingredient-extra-field').on('change', function() {
            calcIngredientInfos();
        });

        lossInput.on('change', function() {
            calcWeights($(this).val());
        });
    });

    function calcIngredientInfos() {
        let grossWeight = grossWeightInput.val();
        let netWeight = netWeightInput.val();
        let unitPrice = getValueUnmasked(unitPriceInput);

        calcLoss(grossWeight, netWeight);
        calcPricePerKilo(unitPrice, grossWeight);
        calcCorrectionFactor(grossWeight, netWeight);
        calcRevenue();
    }

    function calcLoss(grossWeight, netWeight) {
        let loss = 0;

        if (netWeight) {
            loss = grossWeight - netWeight;
        } else {
            setValueInputMask(netWeightInput, grossWeight)
            calcWeights(loss);
        }

        lossInput.val(loss);
    }

    function calcPricePerKilo(unitPrice, grossWeight) {
        if (unitPrice && grossWeight) {
            let pricePerKilo = unitPrice / (grossWeight / 1000);
            setValueInputMask(priceKiloInput, pricePerKilo);
        }
    }

    function calcWeights(loss) {
        let grossWeight = grossWeightInput.val();
        let netWeight = netWeightInput.val();

        if (grossWeight) {
            netWeight = grossWeight - loss;
            setValueInputMask(netWeightInput, netWeight);

            calcCorrectionFactor(grossWeight, netWeight);

            calcRevenue();
        }
    }

    function calcCorrectionFactor(grossWeight, netWeight) {
        if (netWeight > 0) {
            let correctionFactor = grossWeight / netWeight;
            setValueInputMask(correctionFactorInput, correctionFactor);
        } else {
            setValueInputMask(correctionFactorInput, 1);
        }
    }

    function calcNetWeightByCorrectionFactor() {
        const grossWeight = getValueUnmasked(grossWeightInput);
        const correctionFactor = getValueUnmasked(correctionFactorInput);

        if (grossWeight > 0 && correctionFactor > 0) {
            const netWeight = grossWeight / correctionFactor;
            setValueInputMask(netWeightInput, parseInt(netWeight));
        } else {
            setValueInputMask(netWeightInput, 0);
        }
    }

    function calcRevenue() {
        const grossWeight = getValueUnmasked(grossWeightInput);
        const loss = getValueUnmasked(lossInput);

        if (grossWeight > 0) {
            const revenuePercentage = ((1 - (loss / grossWeight)) * 100).toFixed(2);
            setValueInputMask(revenueInput, revenuePercentage);
        } else {
            revenueInput.val(0);
        }
    }

    function calcNetWeightByRevenue() {
        const grossWeight = getValueUnmasked(grossWeightInput);
        const revenuePercentage = getValueUnmasked(revenueInput);

        if (grossWeight > 0 && revenuePercentage > 0) {
            const netWeight = parseInt(grossWeight * (revenuePercentage / 100));
            setValueInputMask(netWeightInput, netWeight);
        } else {
            setValueInputMask(netWeightInput, 0);
        }
    }

    function setValueInputMask(obj, value) {
        value = value.toString();
        if (obj[0].masked) {
            obj[0].masked.unmaskedValue = value;
            obj[0].masked.updateControl();
            obj[0].masked.updateValue();
        } else
            obj.val(value);
    }

    function getValueUnmasked(obj) {
        if (obj[0].masked) return obj[0].masked.unmaskedValue;

        return obj.val();
    }
</script>