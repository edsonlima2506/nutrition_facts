@once
@php
    $classType = "imask";
    $dataType = "data-mask";
    $dataBlur = "data-mask-blur";
@endphp
@push('after_scripts')
    <script src="https://unpkg.com/imask"></script>
    <script>
        $(document).ready(function() {
            if (!window.IMask) return console.error('IMask não encontrado!');

            elements = document.getElementsByClassName("{{ $classType }}");
            elements.forEach((element, index) => {
                imaskSetElement(element);
            });

        });


        function imaskSetElement(element) {
            switch(element.getAttribute('{{ $dataType }}')) {
                case 'upper':
                    element.masked = IMask(element, {
                        mask: /^.+$/,
                        prepare: function (str) {
                            return str.toUpperCase();
                        },
                        commit: function (value, masked) {
                            masked._value = value.toUpperCase();
                        }
                    });
                    break;
                case 'date':
                    element.masked = IMask(element, {
                        mask: Date,
                        pattern: 'Y/m/d',
                        blocks: {
                            d: {
                            mask: IMask.MaskedRange,
                            from: 1,
                            to: 31,
                            maxLength: 2,
                            },
                            m: {
                            mask: IMask.MaskedRange,
                            from: 1,
                            to: 12,
                            maxLength: 2,
                            },
                            Y: {
                            mask: IMask.MaskedRange,
                            from: 2000,
                            to: 2026,
                            }
                        },
                        format: function (date) {
                            var day = date.getDate();
                            var month = date.getMonth() + 1;
                            var year = date.getFullYear();

                            if (day < 10) day = "0" + day;
                            if (month < 10) month = "0" + month;

                            return [year, month, day].join('/');
                        },
                        parse: function (str) {
                            var yearMonthDay = str.split('/');
                            return new Date(yearMonthDay[0], yearMonthDay[1] - 1, yearMonthDay[2]);
                        },
                        autofix: true,
                        lazy: true,
                    });
                    break;
                case 'dateDMY':
                    element.masked = IMask(element, {
                        mask: Date,
                        pattern: 'd/m/Y',
                        blocks: {
                            d: {
                                mask: IMask.MaskedRange,
                                from: 1,
                                to: 31,
                                maxLength: 2,
                            },
                            m: {
                                mask: IMask.MaskedRange,
                                from: 1,
                                to: 12,
                                maxLength: 2,
                            },
                            Y: {
                                mask: IMask.MaskedRange,
                                from: 2000,
                                to: 2026,
                            }
                        },
                        format: function (date) {
                            var day = date.getDate();
                            var month = date.getMonth() + 1;
                            var year = date.getFullYear();

                            if (day < 10) day = "0" + day;
                            if (month < 10) month = "0" + month;

                            return [day,month,year].join('/');
                        },
                        parse: function (str) {
                            var dayMonthYear = str.split('/');
                            return new Date(dayMonthYear[2], dayMonthYear[1] - 1, dayMonthYear[0]);
                        },
                        autofix: true,
                        lazy: true,
                    });
                    break;
                case 'number':
                    element.masked = IMask(element, {
                        mask: Number
                    });
                    break;
                case 'digits':
                    element.masked = IMask(element, {
                        mask: /^\d+$/
                    });
                    break;
                case 'tellphone':
                    element.masked = IMask(element, {
                        mask: '(00) 0000-0000',
                    });
                    break;
                case 'cellphone':
                    element.masked = IMask(element, {
                        mask: '(00) [0] 0000-0000',
                    });
                    break;
                case 'tellphone_cellphone':
                    element.masked = IMask(element, {
                        mask:[
                            {
                                mask: '(00) 0000-0000',
                            },
                            {
                                mask: '(00) [0] 0000-0000',
                            }
                        ]
                    });
                    break;
                case 'cep':
                    element.masked = IMask(
                        element,
                        {
                            mask: '00.000-000',
                            lazy: true,
                        }
                    );
                    break;
                case 'cnpj':
                    element.masked = IMask(
                        element,
                        {
                            mask: '00.000.000/0000-00',
                            lazy: true,
                        }
                    );
                    break;
                case 'rg':
                    element.masked = IMask(
                        element,
                        {
                            mask: '00.000.000-0',
                            lazy: true,
                        }
                    );
                    break;
                case 'cpf':
                    element.masked = IMask(
                        element,
                        {
                            mask: '000.000.000-00',
                            lazy: true,
                        }
                    );
                    break;
                case 'ip':
                    element.masked = IMask(
                        element,
                        {
                            mask: '000.000.000.000',
                            lazy: true,
                        }
                    );
                    break;
                case 'decimal':
                    element.masked = IMask(
                        element,
                        {
                            mask: [
                                { mask: '' },
                                {
                                    mask: 'num',
                                    lazy: false,
                                    blocks: {
                                        num: {
                                            mask: Number,
                                            scale: 2,
                                            thousandsSeparator: '.',
                                            padFractionalZeros: true,
                                            radix: ',',
                                            mapToRadix: ['.'],
                                        }
                                    }
                                }
                            ]
                        }
                    );
                    break;
                default:
                    break;
            }


            var blurListener = element.getAttribute('{{ $dataBlur }}') ?? false;
            if (blurListener) {
                element.addEventListener("blur", function () {
                    if(!this.masked.masked.isComplete) {
                        this.masked.value = '';
                    }
                });
            }

            element.masked.setValueInputMask = function(value) {
                value = value.toString();
                if (element.masked) {
                    element.masked.unmaskedValue = value;
                    element.masked.updateControl();
                } else {
                    element.val(value);
                }
            }
        }

        function setValueInputMask(obj, value)
        {
            value = value.toString();
            if (obj[0].masked) {
                obj[0].masked.unmaskedValue = value;
                obj[0].masked.updateControl();
            } else {
                obj.val(value);
            }
        }
    </script>
@endpush
@endonce
